<?php 

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); 

class StudentController extends Controller 
{ 
    private function studentData() 
    { 
        return [ 
            'title' => 'Mean Rose | Digital Student Profile', 
            'student_id' => 'MCC2024-00171', 
            'name' => 'Mean Rose O. Laplano', 
            'course' => 'BS Information Technology', 
            'year' => '3rd Year', 
            'section' => 'F4', 
            'email' => 'laplanomean55@gmail.com', 
            'address' => 'General Esco, Naujan', 
            'skills' => 'Cooking', 
            'hobbies' => 'Watching TV',
            'profile_description' => 'I am a BS Information Technology student who enjoys learning about technology, improving my skills, and exploring new things.',
            'facebook' => 'https://www.facebook.com/mean.laplano.2024',
            'instagram' => 'https://www.instagram.com/'
        ]; 
    } 

    public function index() 
    { 
        if (session_status() === PHP_SESSION_NONE) { 
            session_start(); 
        } 

        $data = $this->studentData(); 
        $data['notice'] = $_SESSION['student_notice'] ?? null; 

        unset($_SESSION['student_notice']); 

        $this->call->view('student/home', $data); 
    } 

    public function openProfile() 
    { 
        if (session_status() === PHP_SESSION_NONE) { 
            session_start(); 
        } 

        // Create temporary access only from Open Protected Profile
        $_SESSION['student_profile_pass'] = bin2hex(random_bytes(16)); 
        $_SESSION['student_profile_pass_time'] = time(); 

        header('Location: ' . site_url('student/profile')); 
        exit; 
    } 

    public function profile() 
    { 
        if (session_status() === PHP_SESSION_NONE) { 
            session_start(); 
        } 

        /*
         * Check if the user came through
         * Open Protected Profile.
         */
        $hasPass = !empty($_SESSION['student_profile_pass']); 
        $issuedAt = $_SESSION['student_profile_pass_time'] ?? 0; 
        $isFresh = $issuedAt > 0 && (time() - $issuedAt) <= 30; 

        // DIRECT ACCESS = DENIED
        if (!$hasPass || !$isFresh) { 

            unset(
                $_SESSION['student_profile_pass'],
                $_SESSION['student_profile_pass_time']
            ); 

            $_SESSION['student_notice'] = 
                'Access Denied: You cannot open the Student Profile directly. Click "Open Protected Profile" from the Home page first.'; 

            header('Location: ' . site_url('student')); 
            exit; 
        } 

        // Access is valid
        unset(
            $_SESSION['student_profile_pass'],
            $_SESSION['student_profile_pass_time']
        ); 

        $data = $this->studentData(); 
        $data['title'] = 'Mean Rose | Protected Profile'; 

        $data['middleware_message'] = 
            'Welcome to Mean Rose’s protected student profile. Access verified successfully.'; 

        $this->call->view('student/profile', $data); 
    } 
} 

?>