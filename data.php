<?php
# Lets load some details!!
$general        =   array(
    Author      =>  "James Zambon",
    Subtitle    =>  "Flight Paramedic, Developer, Photographer",
    Tagline     =>  "I am a Flight Paramedic with 19+ years experience primarily in Critical Care and the most recent 9 years in both Fixed Wing / Air Ambulance and Commercial Medical Escort work. I have been instructors in ACLS, and BLS.",

    DOB         =>  "12 July 1974",
    Address     =>  "1935 27th Ave N, St Petersburg, FL",
    Phone       =>  "727.430.9583",
    Email       =>  "&#074;&#097;&#109;&#101;&#115;&#064;&#090;&#097;&#109;&#098;&#111;&#110;&#046;&#117;&#115;",

    Facebook    =>  "jazambon",
    Twitter     =>  "_thejames",
    LinkedIn    =>  "jazambon",
    Flickr      =>  "jameszambon",
    MailLink    =>  $locators[ Email ],
    PDFLink     =>  "/James%20Zambon%20-%20Resume%20(Flight%20Paramedic).pdf"
);

$jobs   =   array(
  array(
    Title       =>  "Flight Paramedic",
    Employer    =>  "Commercial Medical Escort: Private Contractor",
    StartDate   =>  "2009",
    EndDate     =>  "current",

    # Description =>  "Contractor to: <a href=\"http://www.parkviewairmedical.com\">Parkview Airmedical</a>, <a href=\"https://www.linkedin.com/pub/imc-meditrans-katie-byrne/6a/99/837\">IMC Meditrans</a>, and <a href=\"http://www.globalmedservices.com\">Global Med Services</a><br>
    Description =>  "Contractor to multiple companies, performing approximately 55 transports / year (450-500k miles) for patients of varying severity.",
  ),
  array(
    Title       =>  "Flight Paramedic",
    Employer    =>  "Air Ambulance: Private Contractor",
    StartDate   =>  "2007",
    EndDate     =>  "2014",

    Description =>  "Contractor to: <a href=\"http://globaljetcare.com\">Global Jet Care</a> and previously Jet ICU<br>
        International long-haul transports of primarily ICU and CCU patients of varying severities.</p>",
  ),
  array(
    Title       =>  "AHA ACLS / BLS Instructor",
    Employer    =>  "MATS / Tampa General &amp; USF College of Medicine",
    StartDate   =>  "2009",
    EndDate     =>  "2014",

    Description =>  "Instructing USF medical and nursing school students and Tampa General Hospital Staff in AHA BLS and ACLS courses.",
  ),
  array(
    Title       =>  "Web Developer",
    Employer    =>  "MityMo Creative, Part-Time",
    StartDate   =>  "2008",
    EndDate     =>  "2011",

    Description =>  "Build fancy things for websites using Ruby, Ruby on Rails, PHP, Pearl, Javascript, HTML5, CSS and other web technologies as required."
  ),
  array(
    Title       =>  "Programmer / Web Developer",
    Employer    =>  "Self Employed",
    StartDate   =>  "2006",
    EndDate     =>  "current",

    Description =>  "Build fancy things for websites using Ruby, Ruby on Rails, PHP, Pearl, Javascript, HTML5, CSS and other web technologies as required."
  ),
  array(
    Title       =>  "Wedding, Event, and Portraiture Photography",
    Employer    =>  "Self Employed",
    StartDate   =>  "2006",
    EndDate     =>  "current",

    Description =>  "Journalistic style approach to document weddings, conferences and other events Portraits for model portfolios, media packet information for dramatic artists, etc.<br>
      Produced several local gallery showings of my photography at Cafe Bohemia, Studio at 620, and The Vitale Gallery.",
  ),
  array(
    Title       =>  "Critical Care Paramedic",
    Employer    =>  "Sunstar Paramedics, Full-Time",
    StartDate   =>  "1998",
    EndDate     =>  "2008",

    Description =>  "<p>Operations Supervisor,
        NR-CCEMT-Paramedic<br>
        NAEMD certified and Communication Center trained, System Status Controller<br>
        Preceptor for new Paramedics<br>
        Instructor for St Petersburg College EMT and Paramedic students, and the Explorer program<br>
        All Children&lsquo;s Transport Team Paramedic<br>
        Represented Sunstar at <a href=\"http://www.emlrc.org\">Clin-Con</a> as team captain<br>
        Participated in <abbr title=\"Total Quality Management\">TQM</abbr> teams<br>
        Developed and implemented a training and certification program <br>
        Developed and implemented a supervision training system Developed an improved method to select, promote and train Assistant Supervisors"
  ),
  array(
    Title       =>  "Medical Control Officer",
    Employer    =>  "Office of the Medical Director; Largo, FL, Part-Time",
    StartDate   =>  "1999",
    EndDate     =>  "2002",

    Description =>  "Assisted with on-line medical direction of on duty Paramedics. 
          Handled documentation of multiple incident registries for continuing quality improvement. 
          Handled documentation and initial investigation of Quality Assurance Reviews. 
          Provided ambulance personnel with hospital Radio Channels."
  )
  // array(
  //   Title       =>  "",
  //   Employer    =>  "",
  //   StartDate   =>  "",
  //   EndDate   =>  "",
  //   Description =>  ""
  // )
);
$educations = array(
  array(
    TheSchool   =>  "Excelsior College, NY",
    Degree      =>  "Bachelor of Science Nursing",
    DateRange   =>  "In process"
  ),
  array(
    TheSchool   =>  "St. Petersburg College, FL",
    Degree      =>  "EMT-Paramedic",
    DateRange   =>  "1993 &ndash; 96"
  )
  // array( */
  //   TheSchool   =>  "",
  //   Degree      =>  "",
  //   DateRange   =>  ""
  // ) */
);

$certifications = array(
  array(
    Title       =>  "Paramedic (FL)",
    Expiration  =>  "12/2020"
  ),
  array(
    Title       =>  "DOT Flight Certification",
    Expiration  =>  "N/A"
  ),
  array(
    Title       =>  "AHA ACLS",
    Expiration  =>  "12/2021"
  ),
  array(
    Title       =>  "AHA BLS",
    Expiration  =>  "12/2021"
  )
);

$languages = array(
  array(
    Name        =>  "English",
    Expertise   =>  "Native Speaker"
  ),
  array(
    Name        =>  "Italian",
    Expertise   =>  "Good"
  ),
  array(
    Name        =>  "French",
    Expertise   =>  "Very Basic"
  ),
  array(
    Name        =>  "Spanish",
    Expertise   =>  "Very Basic"
  )
);

$visas = array(
  array(
    Country     =>  "China",
    Expiration  =>  "Febuary 2026"
  ),
  array(
    Country     =>  "Brazil",
    Expiration  =>  "December 2020"
  ),
  array(
    Country     =>  "Nexus",
    Expiration  =>  "July 2022"
  ),
  array(
    Country     =>  "Global Enrty",
    Expiration  =>  "July 2022"
  ),
  array(
    Country     =>  "EU Passport (Italy)",
    Expiration  =>  "Pending Document approval ~September 2018"
  ),
  array(
    Country     =>  "Chilean border tax",
    Expiration  =>  "December 2021"
  )
);

$miscellaneous = array(
  array(
    Name        =>  "Delta",
    Description =>  "Diamond Medallion"
  ),
  array(
    Name        =>  "American Airlines",
    Description =>  "Executive Platinum"
  ),
  array(
    Name        =>  "United Airlines",
    Description =>  "1K"
  )
  // array(
  //   Name        => "",
  //   Description => ""
  // )
);
?>


