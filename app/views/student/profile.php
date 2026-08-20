<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($title); ?></title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #eef5f0;
            color: #263238;
            min-height: 100vh;
        }


        /* =========================
           NAVIGATION
        ========================= */

        .navbar {
            width: 100%;
            min-height: 72px;

            background: #075c36;
            border-bottom: 4px solid #f4c430;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 8%;
        }

        .brand {
            color: white;
        }

        .brand h2 {
            font-size: 18px;
            margin-bottom: 3px;
        }

        .brand p {
            color: #d7f1e2;
            font-size: 11px;
        }

        .nav-links {
            display: flex;
            gap: 8px;
        }

        .nav-btn {
            color: white;
            text-decoration: none;

            padding: 9px 17px;
            border-radius: 5px;

            font-size: 13px;
            font-weight: bold;

            transition: 0.2s;
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .nav-btn.active {
            background: #f4c430;
            color: #075c36;
        }


        /* =========================
           MAIN PAGE
        ========================= */

        .page {
            max-width: 1050px;
            margin: auto;

            padding: 45px 25px 50px;
        }


        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            margin-bottom: 25px;
        }

        .page-header small {
            color: #075c36;

            font-size: 11px;
            font-weight: bold;

            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .page-header h1 {
            color: #075c36;

            font-size: 30px;

            margin-top: 7px;
            margin-bottom: 6px;
        }

        .page-header p {
            color: #6b7280;
            font-size: 13px;
        }

        .yellow-line {
            width: 65px;
            height: 4px;

            background: #f4c430;

            border-radius: 5px;

            margin-top: 13px;
        }


        /* =========================
           PROFILE HEADER
        ========================= */

        .profile-header {
            background: #075c36;
            color: white;

            border-radius: 10px;

            padding: 30px 35px;

            margin-bottom: 25px;

            box-shadow: 0 7px 20px rgba(0, 70, 40, 0.12);

            position: relative;
            overflow: hidden;
        }

        .profile-header::after {
            content: "";

            position: absolute;

            width: 170px;
            height: 170px;

            border: 24px solid rgba(244, 196, 48, 0.12);

            border-radius: 50%;

            right: -65px;
            top: -75px;
        }

        .profile-status {
            display: inline-block;

            background: rgba(244, 196, 48, 0.18);

            color: #f4c430;

            border: 1px solid rgba(244, 196, 48, 0.4);

            padding: 6px 11px;

            border-radius: 4px;

            font-size: 10px;

            font-weight: bold;

            margin-bottom: 12px;

            position: relative;
            z-index: 1;
        }

        .profile-header h1 {
            font-size: 27px;

            margin-bottom: 7px;

            position: relative;
            z-index: 1;
        }

        .profile-header p {
            color: #dcefe4;

            font-size: 13px;

            line-height: 1.6;

            position: relative;
            z-index: 1;
        }


        /* =========================
           NOTICE
        ========================= */

        .notice {
            background: #fff8d9;

            color: #725d00;

            border-left: 4px solid #f4c430;

            padding: 11px 14px;

            border-radius: 5px;

            margin-bottom: 25px;

            font-size: 12px;

            line-height: 1.5;
        }


        /* =========================
           SECTION HEADER
        ========================= */

        .section-header {
            display: flex;

            justify-content: space-between;
            align-items: center;

            margin-bottom: 15px;
        }

        .section-header h2 {
            color: #075c36;

            font-size: 19px;
        }

        .section-header span {
            background: #fff8d9;

            color: #725d00;

            padding: 6px 10px;

            border-radius: 4px;

            font-size: 10px;

            font-weight: bold;
        }


        /* =========================
           INFORMATION GRID
        ========================= */

        .info-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 15px;

            margin-bottom: 25px;
        }


        /* =========================
           INFORMATION BOX
        ========================= */

        .info-box {
            background: white;

            border: 1px solid #dce9e1;

            border-radius: 8px;

            padding: 18px;

            min-height: 95px;

            box-shadow: 0 4px 14px rgba(0, 70, 40, 0.05);

            transition: 0.2s;
        }

        .info-box:hover {
            border-color: #075c36;

            transform: translateY(-2px);

            box-shadow: 0 6px 16px rgba(0, 70, 40, 0.09);
        }

        .info-box label {
            display: block;

            color: #075c36;

            font-size: 9px;

            font-weight: bold;

            text-transform: uppercase;

            letter-spacing: 0.8px;

            margin-bottom: 9px;
        }

        .info-box span {
            color: #263238;

            font-size: 14px;

            font-weight: 600;

            line-height: 1.5;

            word-break: break-word;
        }


        /* =========================
           FULL WIDTH INFORMATION
        ========================= */

        .info-box.full {
            grid-column: 1 / -1;
        }


        /* =========================
           ADDITIONAL INFORMATION
        ========================= */

        .additional-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 15px;

            margin-bottom: 25px;
        }

        .additional-box {
            background: white;

            border: 1px solid #dce9e1;

            border-radius: 8px;

            padding: 20px;

            box-shadow: 0 4px 14px rgba(0, 70, 40, 0.05);
        }

        .additional-box h3 {
            color: #075c36;

            font-size: 15px;

            margin-bottom: 9px;
        }

        .additional-box p {
            color: #66756d;

            font-size: 12px;

            line-height: 1.7;
        }


        /* =========================
           SOCIAL MEDIA
        ========================= */

        .social-area {
            background: white;

            border: 1px solid #dce9e1;

            border-radius: 8px;

            padding: 20px 22px;

            margin-bottom: 25px;

            box-shadow: 0 4px 14px rgba(0, 70, 40, 0.05);
        }

        .social-area h3 {
            color: #075c36;

            font-size: 15px;

            margin-bottom: 13px;
        }

        .social-links {
            display: flex;

            gap: 10px;

            flex-wrap: wrap;
        }

        .social-links a {
            display: inline-block;

            background: #075c36;

            color: white;

            text-decoration: none;

            padding: 10px 18px;

            border-radius: 5px;

            font-size: 12px;

            font-weight: bold;

            border-bottom: 3px solid #f4c430;

            transition: 0.2s;
        }

        .social-links a:hover {
            background: #064a2c;

            transform: translateY(-1px);
        }


        /* =========================
           BACK BUTTON
        ========================= */

        .back-area {
            background: white;

            border: 1px solid #dce9e1;

            border-radius: 8px;

            padding: 20px 22px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            box-shadow: 0 4px 14px rgba(0, 70, 40, 0.05);
        }

        .back-text h3 {
            color: #075c36;

            font-size: 15px;

            margin-bottom: 5px;
        }

        .back-text p {
            color: #789083;

            font-size: 11px;
        }

        .back-btn {
            display: inline-block;

            background: #075c36;

            color: white;

            text-decoration: none;

            padding: 11px 19px;

            border-radius: 5px;

            font-size: 12px;

            font-weight: bold;

            border-bottom: 3px solid #f4c430;

            transition: 0.2s;

            white-space: nowrap;
        }

        .back-btn:hover {
            background: #064a2c;

            transform: translateY(-1px);
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            text-align: center;

            margin-top: 25px;

            color: #789083;

            font-size: 11px;
        }

        .footer strong {
            color: #075c36;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .navbar {
                padding: 15px 25px;

                flex-direction: column;

                align-items: flex-start;

                gap: 12px;
            }

            .nav-links {
                width: 100%;
            }

            .page {
                padding: 35px 20px 40px;
            }

            .info-grid {
                grid-template-columns: 1fr 1fr;
            }

            .additional-grid {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 550px) {

            .page {
                padding: 30px 15px 40px;
            }

            .profile-header {
                padding: 25px;
            }

            .profile-header h1 {
                font-size: 23px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-box.full {
                grid-column: auto;
            }

            .section-header {
                align-items: flex-start;

                flex-direction: column;

                gap: 8px;
            }

            .back-area {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }

            .back-btn {
                width: 100%;

                text-align: center;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVIGATION
    ========================= -->

    <nav class="navbar">

        <div class="brand">

            <h2>
                Digital Student Profile
            </h2>

            <p>
                Information Technology Department
            </p>

        </div>


        <div class="nav-links">

            <a href="<?= site_url('student'); ?>"
               class="nav-btn">

                Home

            </a>


            <a href="<?= site_url('student/profile'); ?>"
               class="nav-btn active">

                Student Profile

            </a>

        </div>

    </nav>



    <!-- =========================
         MAIN CONTENT
    ========================= -->

    <main class="page">


        <!-- =========================
             PROFILE HEADER
        ========================= -->

        <section class="profile-header">

            <span class="profile-status">
                PROTECTED PROFILE · ACCESS VERIFIED
            </span>

            <h1>
                <?= htmlspecialchars($name); ?>
            </h1>

            <p>
                <?= htmlspecialchars($course); ?>
                · <?= htmlspecialchars($year); ?>
                · Section <?= htmlspecialchars($section); ?>
            </p>

        </section>



        <!-- =========================
             MIDDLEWARE NOTICE
        ========================= -->

        <div class="notice">

            <?= htmlspecialchars(
                $middleware_message,
                ENT_QUOTES,
                'UTF-8'
            ); ?>

        </div>



        <!-- =========================
             STUDENT INFORMATION
        ========================= -->

        <div class="section-header">

            <h2>
                Student Information
            </h2>

            <span>
                VERIFIED RECORD
            </span>

        </div>


        <div class="info-grid">


            <div class="info-box">

                <label>
                    Student ID
                </label>

                <span>
                    <?= htmlspecialchars($student_id); ?>
                </span>

            </div>



            <div class="info-box">

                <label>
                    Student Name
                </label>

                <span>
                    <?= htmlspecialchars($name); ?>
                </span>

            </div>



            <div class="info-box">

                <label>
                    Course
                </label>

                <span>
                    <?= htmlspecialchars($course); ?>
                </span>

            </div>



            <div class="info-box">

                <label>
                    Year Level
                </label>

                <span>
                    <?= htmlspecialchars($year); ?>
                </span>

            </div>



            <div class="info-box">

                <label>
                    Section
                </label>

                <span>
                    <?= htmlspecialchars($section); ?>
                </span>

            </div>



            <div class="info-box">

                <label>
                    Email Address
                </label>

                <span>
                    <?= htmlspecialchars($email); ?>
                </span>

            </div>



            <div class="info-box full">

                <label>
                    Address
                </label>

                <span>
                    <?= htmlspecialchars($address); ?>
                </span>

            </div>


        </div>



        <!-- =========================
             ADDITIONAL INFORMATION
        ========================= -->

        <div class="section-header">

            <h2>
                Additional Information
            </h2>

        </div>


        <div class="additional-grid">


            <div class="additional-box">

                <h3>
                    Skills
                </h3>

                <p>
                    <?= htmlspecialchars($skills); ?>
                </p>

            </div>



            <div class="additional-box">

                <h3>
                    Hobbies
                </h3>

                <p>
                    <?= htmlspecialchars($hobbies); ?>
                </p>

            </div>


        </div>



        <!-- =========================
             ABOUT ME
        ========================= -->

        <div class="additional-box"
             style="margin-bottom: 25px;">

            <h3>
                About Me
            </h3>

            <p>
                <?= htmlspecialchars($profile_description); ?>
            </p>

        </div>



        <!-- =========================
             SOCIAL MEDIA
        ========================= -->

        <div class="social-area">

            <h3>
                Social Media
            </h3>

            <div class="social-links">


                <a
                    href="<?= htmlspecialchars($facebook); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Facebook
                </a>


                <a
                    href="<?= htmlspecialchars($instagram); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Instagram
                </a>


            </div>

        </div>



        <!-- =========================
             BACK TO HOME
        ========================= -->

        <div class="back-area">

            <div class="back-text">

                <h3>
                    Return to Student Dashboard
                </h3>

                <p>
                    Go back to the main student information page.
                </p>

            </div>


            <a href="<?= site_url('student'); ?>"
               class="back-btn">

                ← Back to Home

            </a>

        </div>



        <!-- =========================
             FOOTER
        ========================= -->

        <div class="footer">

            <strong>
                Information Technology Department
            </strong>

            · Digital Student Information System

        </div>


    </main>


</body>

</html>