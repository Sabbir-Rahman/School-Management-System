<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Teacher's Sign Up​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Teacher sign up</title>
    <link rel="stylesheet" href="/css/teacherSignUp.css" media="screen">
    <link rel="stylesheet" href="/css/teacherSignUp-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/teacherSignUp.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.1.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
    <meta property="og:title" content="Page 5">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>
<body data-home-page="Page-5.html" data-home-page-title="Page 5" class="u-body u-overlap">


<footer class="u-align-center u-clearfix u-footer u-image u-footer" id="sec-9343" data-image-width="1280" data-image-height="853"><h1 class="u-text u-text-white u-text-1">
        <span style="font-weight: 700;">Teacher's Sign Up</span>
    </h1><div id="form-teacher" class="u-align-left u-form u-form-1">
        <form action="{{route('teacherSigningUp')}}" method="POST" class="u-clearfix u-form-spacing-7 u-form-vertical u-inner-form" style="padding: 8px;" source="custom" name="form">
           @csrf
            <div class="u-form-group u-form-name">
                <label for="name-3b9a" class="u-label u-text-white u-label-1">Teacher's Name</label>
                <input type="text" placeholder="Enter your name" id="name-3b9a" name="teacher_name" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white" required="">
            </div>
            <div class="u-form-email u-form-group u-form-group-2">
                <label for="email-c1ad" class="u-label u-text-white u-label-2">Email</label>
                <input type="email" placeholder="Enter your email" id="email-c1ad" name="teacher_email" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white" required="">
            </div>
            <div class="u-form-group u-form-group-3">
                <label for="text-9fa4" class="u-label u-text-white u-label-3">Educational Qualification</label>
                <input type="text" placeholder="Enter your edutional qualifications" id="text-9fa4" name="teacher_educational_qualification" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white">
            </div>
            <div class="u-form-group u-form-group-4">
                <label for="text-ab8d" class="u-label u-text-white u-label-4">Experiences</label>
                <input type="text" placeholder="Enter your experiences" id="text-ab8d" name="teacher_experience" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white">
            </div>
            <div class="u-form-group u-form-select u-form-group-9">
                <label for="select-861e" class="u-label u-text-white u-label-8">Subject Speciality</label>
                <div class="u-form-select-wrapper">
                    <select id="select-861e" name="teacher_subject_speciality" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white" autofocus="autofocus">
                        <option value="Bangla">Bangla</option>
                        <option value="English">English</option>
                        <option value="Math">Math</option>
                        <option value="Physics">Physics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="History">History</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Management">Management</option>
                        <option value="Finance">Finance</option>
                        <option value="Social Science">Social Science</option>
                        <option value="Islam Religion">Islam Religion</option>
                        <option value="Hindu Religion">Hindu Religion</option>
                        <option value="Christian Religion">Christian Religion</option>
                        <option value="Buddho Religion">Buddho Religion</option>
                        <option value="Physical Education">Physical Education</option>
                        <option value="Music">Music</option>
                        <option value="Art">Art</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                </div>
            </div>
            <div class="u-form-group u-form-group-5">
                <label for="text-9fa4" class="u-label u-text-white u-label-3">Joining Year</label>
                <input type="number" placeholder="Enter your joining year(four digit)" id="text-9fa4" name="teacher_joining_year" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white">
            </div>
            <div class="u-form-group u-form-group-6">
                <label for="text-f143" class="u-label u-text-white u-label-5">Father's Name</label>
                <input type="text" placeholder="Enter your father's name" id="text-f143" name="teacher_father_name" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white">
            </div>
            <div class="u-form-group u-form-group-7">
                <label for="text-1ec9" class="u-label u-text-white u-label-6">Mother's Name</label>
                <input type="text" placeholder="Enter your mother's name" id="text-1ec9" name="teacher_mother_name" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white">
            </div>
            <div class="u-form-group u-form-group-8">
                <label for="text-fd11" class="u-label u-text-white u-label-7">NID</label>
                <input type="text" placeholder="Enter your NID" id="text-fd11" name="teacher_nid" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white">
            </div>
            <div class="u-form-group u-form-select u-form-group-9">
                <label for="select-861e" class="u-label u-text-white u-label-8">Gender</label>
                <div class="u-form-select-wrapper">
                    <select id="select-861e" name="teacher_gender" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white" autofocus="autofocus">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        <option value="Prefer Not To Say">Prefer Not To Say</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                </div>
            </div>
            <div class="u-form-group u-form-group-10">
                <label for="text-52d9" class="u-label u-text-white u-label-9">Hobby</label>
                <input type="text" placeholder="Enter your hobby" id="text-52d9" name="teacher_hobby" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white">
            </div>
            <div class="u-form-address u-form-group u-form-group-11">
                <label for="address-dae7" class="u-label u-text-white u-label-10">Address</label>
                <input type="text" placeholder="Enter your address" id="address-dae7" name="teacher_address" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white" required="">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-12">
                <label for="phone-5737" class="u-label u-text-white u-label-11">Contact No.</label>
                <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-5737" name="teacher_contact" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white" required="">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-13">
                <label for="phone-19c5" class="u-label u-text-white u-label-12">Optional Contact. No</label>
                <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-19c5" name="teacher_contact_optional" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white" required="">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-group-14">
                <label for="text-7d34" class="u-label u-text-white u-label-14">Password</label>
                <input type="password" placeholder="Enter your password" id="text-7d34" name="teacher_password" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-group-15">
                <label for="text-2e5a" class="u-label u-text-white u-label-15">Confirm password</label>
                <input type="password" placeholder="Re-enter your password" id="text-2e5a" name="text-4" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white">
            </div>
            <div class="u-form-group u-form-group-15">
                <label for="textarea-dad0" class="u-label u-text-white u-label-16">Comment</label>
                <textarea placeholder="Add your comments if need" rows="4" cols="50" id="textarea-dad0" name="teacher_comment" class="u-border-2 u-border-palette-4-light-1 u-input u-input-rectangle u-text-white"></textarea>
            </div>
            <button type="submit">Submit</button>

    </div></footer>

</body>
</html>
