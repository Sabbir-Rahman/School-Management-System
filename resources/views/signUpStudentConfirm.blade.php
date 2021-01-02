<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Student Added Confirm Page</title>
    <link rel="stylesheet" href="/css/studentSignUpConfirm.css" media="screen">
    <link rel="stylesheet" href="/css/studentSignUpConfirm-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/signUpStudentConfirm.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.2.3, nicepage.com">
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
<body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
<section class="u-clearfix u-gradient u-section-1" id="sec-e271">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div id="text-box" class="u-container-style u-group u-opacity u-opacity-45 u-palette-1-base u-radius-50 u-shape-round u-group-1">
            <div  class="u-container-layout u-container-layout-1">
                <h6>Student succesfully added to database</h6>
                <h6>Student name {{$name}}</h6>
                <h4><font color="blue"> Student id: {{$id}}</font></h4>
                <h6 color="white">Student batch: {{$batch}}</h6>
                <h6 color="white">Student class: {{$class}}</h6>
                <h6 color="white">Student shift: {{$shift}}</h6>
                <h6 color="white">Student section: {{$section}}</h6>
                <h2 color="white"><font color="red">Never forget your student ID!!!</font> </h2>
                <a href="{{route('fatherSignUp')}}" ><button>Continue to father signup</button></a></div>
        </div>
    </div>
    <img id="back-img" src="/img/signUpStudentConfirmBack.png" alt="" class="u-image u-image-default u-image-1" data-image-width="674" data-image-height="370">
    </div>
</section>

</body>
</html>
