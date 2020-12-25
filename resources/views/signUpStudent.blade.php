<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="SIGN UP&nbsp; &nbsp; ​ STUDENT">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Sign Up Student</title>
    <link rel="stylesheet" href="/css/signUpStudent.css" media="screen">
    <link rel="stylesheet" href="/css/signUpStudent-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/signUpStudentJquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="/js/signUpStudent.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.1.3, nicepage.com">

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>
<body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body u-overlap u-overlap-contrast"><header class="u-clearfix u-header u-header" id="sec-712f"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1" id="form-signup-student">
            <form action="{{ route('studentcreate') }}" method="POST" >
                @csrf
                <div class="u-form-group u-form-group-1">
                    <label for="text-70fc" class="u-label u-text-palette-4-base u-label-1">Name</label>
                    <input type="text" placeholder="Enter your name" id="text-70fc" name="student_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-1">
                </div>
                <div class="u-form-date u-form-group u-form-group-2">
                    <label for="date-c95b" class="u-label u-text-palette-4-base u-label-2">Date of birth</label>
                    <input type="date" placeholder="Date of birth" id="date-c95b" name="student_birthdate" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-2">
                </div>
                <div class="u-form-group u-form-select u-form-group-3">
                    <label for="select-95d6" class="u-label u-text-palette-4-base u-label-3">Blood Group</label>
                    <div class="u-form-select-wrapper">
                        <select id="select-95d6" name="student_blood_group" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-3">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                    </div>
                </div>
                <div class="u-form-address u-form-group u-form-group-4">
                    <label for="address-ba13" class="u-label u-text-palette-4-base u-label-4">Address</label>
                    <input type="text" placeholder="Enter your address" id="address-ba13" name="student_address" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-4" required="">
                </div>
                <div class="u-form-group u-form-select u-form-group-5">
                    <label for="select-6956" class="u-label u-text-palette-4-base u-label-5">Gender</label>
                    <div class="u-form-select-wrapper">
                        <select id="select-6956" name="student_gender" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-5">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                            <option value="Prefer not to say">Prefer not to say</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                    </div>
                </div>
                <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-6">
                    <label for="select-01a2" class="u-label u-text-palette-4-base u-label-6">Class</label>
                    <div class="u-form-select-wrapper">
                        <select id="select-01a2" name="student_class" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-6">
                            <option value="Play">Play</option>
                            <option value="Nursury">Nursury</option>
                            <option value="KG-1">KG-1</option>
                            <option value="KG-2">KG-2</option>
                            <option value="One">One</option>
                            <option value="Two">Two</option>
                            <option value="Three">Three</option>
                            <option value="Four">Four</option>
                            <option value="Five">Five</option>
                            <option value="Six">Six</option>
                            <option value="Seven">Seven</option>
                            <option value="Eight">Eight</option>
                            <option value="Nine">Nine</option>
                            <option value="Ten">Ten</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                    </div>
                </div>
                <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-7">
                    <label for="select-36f0" class="u-label u-text-palette-4-base u-label-7">Medium</label>
                    <div class="u-form-select-wrapper">
                        <select id="select-36f0" name="student_medium" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-7">
                            <option value="Bangla Medium">Bangla Medium</option>
                            <option value="English Medium">English Medium</option>
                            <option value="Bangla Version">Bangla Version</option>
                            <option value="English Version">English Version</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                    </div>
                </div>
                <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-8">
                    <label for="select-f60f" class="u-label u-text-palette-4-base u-label-8">Group</label>
                    <div class="u-form-select-wrapper">
                        <select id="select-f60f" name="student_group" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-8">
                            <option value="General">General</option>
                            <option value="Vocational">Vocational</option>
                            <option value="Religious">Religious</option>
                            <option value="Science">Science</option>
                            <option value="Humanity">Humanity</option>
                            <option value="Business">Business</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                    </div>
                </div>
                <div class="u-form-group u-form-select u-form-group-9">
                    <label for="select-a172" class="u-label u-text-palette-4-base u-label-9">Religeon</label>
                    <div class="u-form-select-wrapper">
                        <select id="select-a172" name="student_religion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-9">
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Cristian">Cristian</option>
                            <option value="Buddho">Buddho</option>
                            <option value="Other">Other</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                    </div>
                </div>
                <div class="u-form-group u-form-group-10">
                    <label for="address-ba13" class="u-label u-text-palette-4-base u-label-10">Admission year</label>
                    <input type="text" placeholder="Enter year you want to take admission" id="address-ba13" name="student_admission_year" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-4" required="">
                </div>
                <div class="u-form-group u-form-group-11">
                    <label for="textarea-93c3" class="u-label u-text-palette-4-base u-label-11">Hobby</label>
                    <textarea placeholder="Enter your hobby" rows="4" cols="50" id="textarea-93c3" name="student_hobby" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-10"></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <h1 class="u-text u-title u-text-1" id="title-page">SIGN UP<br>
            <span style="font-size: 1.25rem;">&nbsp; &nbsp; <span class="u-text-palette-1-base">STUDENT</span>
          </span>
            <br>
        </h1>
    </div></header>
<section id="carousel_15c4" class="u-carousel u-slide u-block-13da-1" data-u-ride="carousel" data-interval="5000">
    <ol class="u-absolute-hcenter u-carousel-indicators u-block-13da-2">
        <li data-u-target="#carousel_15c4" data-u-slide-to="0" class="u-active u-grey-30"></li>
    </ol>
    <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-1" src="" data-image-width="1280" data-image-height="720">
            <div class="u-clearfix u-sheet u-sheet-1"></div>
        </div>
    </div>



</section>



</body>
</html>
