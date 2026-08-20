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
           WELCOME SECTION
        ========================= */

        .welcome-card {
            background: #075c36;
            color: white;

            border-radius: 10px;

            padding: 30px 35px;

            margin-bottom: 25px;

            box-shadow: 0 7px 20px rgba(0, 70, 40, 0.12);

            position: relative;
            overflow: hidden;
        }

        .welcome-card::after {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            border: 25px solid rgba(244, 196, 48, 0.12);

            border-radius: 50%;

            right: -70px;
            top: -80px;
        }

        .welcome-card h2 {
            font-size: 27px;

            margin-bottom: 8px;

            position: relative;
            z-index: 1;
        }

        .welcome-card p {
            color: #dcefe4;

            font-size: 13px;
            line-height: 1.6;

            position: relative;
            z-index: 1;
        }


        /* =========================
           ACCESS DENIED NOTICE
        ========================= */

        .notice {
            background: #fee2e2;
            color: #b91c1c;

            border-left: 5px solid #dc2626;

            padding: 13px 16px;

            border-radius: 6px;

            margin-bottom: 20px;

            font-size: 12px;
            font-weight: bold;

            box-shadow: 0 3px 10px rgba(220, 38, 38, 0.08);
        }


        /* =========================
           STUDENT INFORMATION HEADER
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
           INFORMATION CARD
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

            word-break: break-word;
        }


        /* =========================
           PROFILE ACTION
        ========================= */

        .profile-area {
            background: white;

            border: 1px solid #dce9e1;

            border-radius: 8px;

            padding: 20px 22px;

            display: flex;

            justify-content: space-between;
            align-items: center;

            box-shadow: 0 4px 14px rgba(0, 70, 40, 0.05);
        }

        .profile-text h3 {
            color: #075c36;

            font-size: 15px;

            margin-bottom: 5px;
        }

        .profile-text p {
            color: #789083;

            font-size: 11px;
        }

        .profile-btn {
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

        .profile-btn:hover {
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

        }


        @media (max-width: 550px) {

            .page {
                padding: 30px 15px 40px;
            }

            .page-header h1 {
                font-size: 25px;
            }

            .welcome-card {
                padding: 25px;
            }

            .welcome-card h2 {
                font-size: 23px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .section-header {
                align-items: flex-start;

                flex-direction: column;

                gap: 8px;
            }

            .profile-area {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }

            .profile-btn {
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
               class="nav-btn active">

                Home

            </a>


            <a href="<?= site_url('student/profile'); ?>"
               class="nav-btn">

                Student Profile

            </a>

        </div>

    </nav>



    <!-- =========================
         MAIN CONTENT
    ========================= -->

    <main class="page">


        <!-- =========================
             WELCOME CARD
        ========================= -->

        <section class="welcome-card">

            <h2>
                Digital Student Profile System
            </h2>

            <p>
                Student Information System

                Web Systems and Technologies 2 · Laboratory Exercise No. 3
            </p>

            <div class="yellow-line"></div>

        </section>



        <!-- =========================
             ACCESS DENIED NOTICE
        ========================= -->

        <?php if (!empty($notice)): ?>

            <div class="notice">

                <?= htmlspecialchars($notice); ?>

            </div>

        <?php endif; ?>



        <!-- =========================
             INFORMATION HEADER
        ========================= -->

        <div class="section-header">

            <h2>
                Student Information
            </h2>

            <span>
                ACTIVE STUDENT
            </span>

        </div>



        <!-- =========================
             INFORMATION CARDS
        ========================= -->

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


        </div>



        <!-- =========================
             PROFILE ACTION
        ========================= -->

        <div class="profile-area">

            <div class="profile-text">

                <h3>
                    Complete Student Profile
                </h3>

                <p>
                    View additional student information
                    in the protected profile page.
                </p>

            </div>


            <a href="<?= site_url('student/open-profile'); ?>"
               class="profile-btn">

                View Protected Profile →

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