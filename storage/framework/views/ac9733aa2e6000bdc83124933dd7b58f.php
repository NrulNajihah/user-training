<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UnitLatihan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style02.css" rel="stylesheet">
    <style>
    .bg-breadcrumb {
        position: relative;
        overflow: hidden;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../images/bg.png);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 60px 0 60px 0;
        transition: 0.5s;
    }
    </style>
</head>

<body>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand p-0">
                <h1 class="display-6 text-dark"><i class="fas fa-tasks text-primary me-3"></i>UnitLatihanINOS</h1>
                <!-- <img src="#" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Carousel Start -->
    <div class="container-fluid service py-5" style=" position: relative;
    overflow: hidden;
    background:  url(images/bg.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 60px 0 60px 0;
    transition: 0.5s;">
        <div class="container service-section py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Welcome To INOS</h4>
                <h1 class="display-5 text-white mb-4">Unit Latihan INOS</h1>
                <p class="mb-0 text-white">
                    Selamat datang ke unit latihan INOS. Kami mengucapkan terima kasih dan mengalu-alukan penyertaan
                    tuan/puan di
                    dalam setiap program yang ditawarkan oleh pihak INOS.
                </p><br>
                <p class="mb-0 text-white">
                    New User? Please Register First....
                    <button type="button" class="btn btn-primary py-2 px-4" id="register-btn">Register</button>
                </p>
            </div>

            <!-- Enter Email Form -->
            <div class="row g-4">
                <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" style="width: 46.666667%; margin-left:9rem;">
                    <div class="ticket-form p-5" id="initial-form"
                        style="background: rgba(255, 255, 255, 0.4); border-radius: 10px; margin-top:40px;">
                        <h2 class="text-dark text-uppercase mb-4">Enter Your Email</h2>
                        <form action="<?php echo e(route('user.getUserId')); ?>" method="POST" id="email-form">
                            <?php echo csrf_field(); ?>
                            <div class="row g-4">
                                <div class="col-12">
                                    <input type="email" class="form-control border-0 py-2" name="email" id="email-input"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary w-100 py-2 px-5"
                                        id="get-user-id-btn">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Register Form -->
                    <div class="ticket-form p-5" id="register-form"
                        style="background: rgba(255, 255, 255, 0.4); border-radius: 10px; margin-top:40px; display: none;">
                        <h2 class="text-dark text-uppercase mb-4">Register Your Information</h2>
                        <form action="<?php echo e(route('user.getUserId')); ?>" method="POST" id="email-form">
                            <?php echo csrf_field(); ?>
                            <div class="row g-4">
                                <div class="col-12">
                                    <input type="email" class="form-control border-0 py-2" name="email"
                                        id="register-email" placeholder="Your Email" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 py-2" name="fullname" id="fullname"
                                        placeholder="Your Full Name" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 py-2" name="department"
                                        id="department" placeholder="Your Department" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 py-2" name="contact_number"
                                        id="contact-number" placeholder="Your Contact Number" required>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-2 px-5">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about pb-5">
        <div class="container pb-5">
            <div class="row g-5">
                <?php if(session('user_id')): ?>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="ticket-form p-5" id="course-form"
                        style="background:#24728f8c; border-radius: 10px; margin-top:30px; display:none;">
                        <h2 class="text-dark text-uppercase mb-4">Choose Your Course</h2>
                        <form>
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="user_id" value="<?php echo e(session('user_id')); ?>">
                            <div class="row g-4">
                                <div class="col-12">
                                    <select class="form-select border-0 py-2" id="cID" name="cID" required>
                                        <?php $__currentLoopData = courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($course->cID); ?>"><?php echo e($course->course_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($programs)): ?>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="ticket-form p-5" style="background:#3cbeee61; border-radius: 10px; margin-top:30px;">
                        <h2 class="text-dark text-uppercase mb-4">Choose Your Program</h2>
                        <form action="<?php echo e(route('program.select')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="user_id" value="<?php echo e($user_id); ?>">
                            <input type="hidden" name="course_id" value="<?php echo e($selected_course); ?>">
                            <div class="row g-4">
                                <div class="col-12">
                                    <select name="program_id" class="form-select border-0 py-2">
                                        <option disabled selected>Select a program</option>
                                        <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($program->id); ?>"><?php echo e($program->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-2 px-5">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container service-section py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Details</h4>
                <p class="mb-0 text-white">REGISTRATION & PAYMENT DEADLINE: xx/xx/xxxx</p>

            </div>
            <div class="row g-4">
                <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s" style="display:none">
                    <div class="service-days p-4">
                        <div
                            class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap">
                            <h4 class="mb-0 pb-2 pb-sm-0">Duration</h4>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>3 Days</p>
                        </div>
                        <div
                            class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                            <h4 class="mb-0 pb-2 pb-sm-0">Fee</h4>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>RM1000/Pax</p>
                        </div>
                        <div
                            class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                            <h4 class="mb-0">Time</h4>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 17:00 PM</p>
                        </div>
                        <div
                            class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                            <h4 class="mb-0">Practical Mode</h4>
                            <p class="mb-0"><i class="fas fa-pin text-primary me-2"></i>In-Person</p>
                        </div>
                        <div
                            class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                            <h4 class="mb-0">Location</h4>
                            <p class="mb-0"><i class="fas fa-pin text-primary me-2"></i>X</p>
                        </div>
                    </div>
                    <div class="ticket-form p-5"
                        style="background: rgba(255, 255, 255, 0.4); border-radius: 10px; margin-top:40px;">
                        <h2 class="text-dark text-uppercase mb-4">Available Date</h2>
                        <form>
                            <div class="row g-4">

                                <div class="col-12">
                                    <select class="form-select border-0 py-2" aria-label="Default select example">
                                        <option selected>...</option>
                                        <option value="1">...</option>
                                        <option value="2">....</option>

                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary w-100 py-2 px-5">Next</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">

                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Ticket Packages Start -->
    <div class="container-fluid py-5" style="margin-left:15rem;">
        <div class="container py-5">
            <div class="row g-5 align-items-center" style="display:none">
                <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="packages-item h-100">
                        <h4 class="text-primary">Payment</h4>

                        <p class="mb-4">Jom sertai kami. Jangan lepaskan peluang keemasan ini.<br>
                            Bayaran boleh dibuat kepada : CIMB Bank Account No: XXXXXX (UMT)
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-item bg-primary rounded text-center p-5 h-100">
                        <div class="pb-4 border-bottom">
                            <h2 class="text-dark mb-4">Proof of Receipt</h2>
                        </div>
                        <div class="text-white py-4">
                            <input type="file" class="form-control border-0 py-2" id="receipt"
                                placeholder="Your Receipt">
                        </div>
                        <a href="#" class="btn btn-dark rounded-pill py-3 px-5">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ticket Packages End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">

    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const registerBtn = document.getElementById('register-btn');
        const registerForm = document.getElementById('register-form');
        const initialForm = document.getElementById('initial-form');
        const registerUserForm = document.getElementById('register-user-form');

        // Show the registration form
        registerBtn.addEventListener('click', () => {
            initialForm.style.display = 'none';
            registerForm.style.display = 'block';
        });

        // Handle registration submission
        registerUserForm.addEventListener('submit', async (event) => {
            event.preventDefault(); // Prevent default form submission

            const formData = new FormData(registerUserForm);

            try {
                const response = await fetch(registerUserForm.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                            .value,
                    },
                });

                if (response.ok) {
                    const data = await response.json();
                    alert('Registration successful! User ID: ' + data.user_id);

                    // Reset form fields
                    registerUserForm.reset();

                    // Show email form again
                    registerForm.style.display = 'none';
                    initialForm.style.display = 'block';
                } else {
                    const errorData = await response.json();
                    alert('Error: ' + (errorData.message || 'Unable to register'));
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const emailForm = document.getElementById('email-form');
        const courseForm = document.getElementById('course-form');
        
        const nextButton = document.getElementById('get-user-id-btn');
        const courseSelect = document.querySelector('select[name="cID"]');
        const programForm = document.getElementById('program-form');
        const dateForm = document.getElementById('date-form');
        const receiptForm = document.getElementById('receipt-form');

        // Step 1: Fetch user_id
        nextButton.addEventListener('click', async () => {
    const email = document.getElementById('email-input').value.trim();
    if (!email) return alert('Please enter a valid email.');

    try {
    const response = await fetch(emailForm.action, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
        },
        body: JSON.stringify({ email }),
    });

    if (!response.ok) {
        const errorData = await response.json();
        console.error('Error response:', errorData);
        alert(errorData.error || 'An unexpected error occurred.');
        return;
    }

    const data = await response.json();
    if (data.user_id) {
        courseForm.style.display = 'block';
        alert('User ID: ' + data.user_id);
    } else {
        alert('No user found for =' +data.email);
    }
} catch (err) {
    console.error('Fetch error:', err);
    alert('An error occurred. Please try again.');
}

});

        // Step 2: Fetch programs based on selected course
        courseSelect.addEventListener('change', async () => {
            const cID = courseSelect.value;
            try {
                const response = await fetch('/get-programs', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({
                        cID
                    }),
                });

                const data = await response.json();
                if (data.programs.length > 0) {
                    const programSelect = document.querySelector('select[name="pID"]');
                    programSelect.innerHTML = '<option disabled selected>Select a program</option>';
                    data.programs.forEach(program => {
                        programSelect.innerHTML +=
                            `<option value="${program.pID}">${program.name}</option>`;
                    });
                    programForm.style.display = 'block';
                } else {
                    alert('No programs available for the selected course.');
                }
            } catch (err) {
                console.error(err);
                alert('An error occurred.Please try again');
            }
        });

        // Step 3: Fetch active dates based on selected program
        document.querySelector('select[name="pID"]').addEventListener('change', async () => {
            const pID = document.querySelector('select[name="pID"]').value;
            try {
                const response = await fetch('/get-dates', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                            .value,
                    },
                    body: JSON.stringify({
                        pID
                    }),
                });

                const data = await response.json();
                if (data.dates.length > 0) {
                    const dateSelect = document.querySelector('select[name="dID"]');
                    dateSelect.innerHTML = '<option disabled selected>Select a date</option>';
                    data.dates.forEach(date => {
                        dateSelect.innerHTML +=
                            `<option value="${date.dID}">${date.date}</option>`;
                    });
                    dateForm.style.display = 'block';
                } else {
                    alert('No active dates available for the selected program.');
                }
            } catch (err) {
                console.error(err);
                alert('An error occurred.');
            }
        });

        // Step 4: Handle receipt upload and form submission
        document.getElementById('upload-receipt-btn').addEventListener('click', async () => {
            const formData = new FormData(receiptForm);
            try {
                const response = await fetch(receiptForm.action, {
                    method: 'POST',
                    body: formData,
                });

                const data = await response.json();
                alert(data.message || 'Enrollment completed successfully!');
            } catch (err) {
                console.error(err);
                alert('An error occurred.Please try again!');
            }
        });
    });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html><?php /**PATH C:\inetpub\wwwroot\project\resources\views/index.blade.php ENDPATH**/ ?>