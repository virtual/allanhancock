<nav class="nav nav-underline megamenu navbar-expand-lg navmenu" aria-label="Main Navigation">
  <h2 class="sr-only">Navigation</h2>
  <div class="menu-container">
    <div class="d-flex d-block d-lg-none justify-content-between">
      <a class="navbar-brand" href="https://www.hancockcollege.edu/">
        <img src="{{ $page->baseUrl }}/resources/img/logos/ahc-logo-mobile.png" width="170" height="50" srcset="{{ $page->baseUrl }}/resources/img/logos/ahc-logo-mobile2x.png 2x, {{ $page->baseUrl }}/resources/img/logos/ahc-logo-mobile3x.png 3x, {{ $page->baseUrl }}/resources/img/logos/ahc-logo-mobile4x.png 4x" alt="Allan Hancock College" />
      </a>
      <div class="flex-button flex-button-right">
          <button id="mobile-menu-button" class="navbar-toggler primary" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation">
          @include ('_svg.menu') 
        <span class="sr-only">Menu</span>
        </button>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">

      
        <div class="d-block d-lg-none"> 
        @include ('_partials.topnav2') 
        </div>
      <ul>

         


        <li class="dropdown">
          <a class="dropdown-toggle" href="#">About AHC</a>

          <div class="dropdown-menu">
            <div class="subnav">
              <ul>
              <li>
              <h2>Directories</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Campuses');" href="https://www.hancockcollege.edu/public_affairs/district-map.php">Campuses (Santa Maria, Lompoc, Santa Ynez, Vandenberg)</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC College Directory');" href="https://www.hancockcollege.edu/public_affairs/directories.php">College Directory</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Maps and Locations');" href="https://www.hancockcollege.edu/public_affairs/locations.php">Maps and Locations</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Faculty and Staff');" href="https://www.hancockcollege.edu/public_affairs/directories.php">Staff, Faculty, and Administration Directories</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Student Services Directory');" href="https://www.hancockcollege.edu/current_students/student-services.php">Student Services Directory</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Virtual Campus Tour');" href="https://www.hancockcollege.edu/public_affairs/maps.php">Virtual Campus Tour</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'About AHC Tours');" href="https://www.hancockcollege.edu/campuscruise/index.php">Tours (Campus Cruise)</a></li>
              </ul>
              <ul>
              <li>
              <h2>About</h2>
              </li>
              <li><a href="https://www.hancockcollege.edu/public_affairs/index.php">About the College</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Accreditation');" href="https://www.hancockcollege.edu/accreditation/index.php">Accreditation</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Acronym List');" href="https://www.hancockcollege.edu/presidents_office/docs/Acronyms.pdf">Acronym List</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Policies');" href="https://www.hancockcollege.edu/public_affairs/policies.php">AHC Policies</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Board of Trustees');" href="https://www.hancockcollege.edu/board/index.php">Board of Trustees</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Bond Measure I');" href="https://www.hancockcollege.edu/measure_i/index.php">Bond Measure I</a></li>
              <li><a href="https://www.hancockcollege.edu/planning/financial.php">Financial Audits/Budget</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Futuris Trust Annual Notice');" href="https://www.hancockcollege.edu/administrative_services/docs/Futuris%20Trust%20Letter.pdf" target="_blank">Futuris Trust Annual Notice</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Governance');" href="https://www.hancockcollege.edu/governance/index.php">Governance</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC History');" href="https://www.hancockcollege.edu/public_affairs/history.php">History</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Insitutional Effectiveness');" href="https://www.hancockcollege.edu/institutional_effectiveness/index.php">Institutional Effectiveness</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Mission and Values');" href="https://www.hancockcollege.edu/public_affairs/mission.php">Mission and Values</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'About AHC Retirement Board of Authority');" href="https://www.hancockcollege.edu/employees/retirement.php">Retirement Board of Authority</a></li>
              </ul>
              <ul>
              <li>
              <h2>Community Interests</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Foundation');" href="https://www.hancockcollege.edu/foundation/index.php">AHC Foundation</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Athletics');" href="http://athletics.hancockcollege.edu/landing/index">Athletics</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Community Education');" href="https://www.hancockcollege.edu/community_education/index.php">Community Education</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Community Information');" href="https://www.hancockcollege.edu/human_resources/important-links.php">Community Information</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Contract Education');" href="https://www.hancockcollege.edu/contracteducation/index.php">Contract Education</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Institutional Advancement');" href="https://www.hancockcollege.edu/planning/index.php">Institutional Advancement</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Institutional Grants');" href="https://www.hancockcollege.edu/institutional_grants/index.php">Institutional Grants</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC PCPA – Pacific Conservatory Theatre');" href="http://www.pcpa.org/">PCPA – Pacific Conservatory Theatre</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Public Affairs and Government Relations');" href="https://www.hancockcollege.edu/public_affairs/public-affairs.php">Public Affairs and Government Relations</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'About AHC Public Safety Training Complex');" href="https://www.hancockcollege.edu/pstc/index.php">Public Safety Training Complex</a></li>
              <li class="last"><a href="https://www.hancockcollege.edu/sustainability/index.php">Sustainability on Campus</a></li>
              <li class="last"><a href="https://www.hancockcollege.edu/agribusiness/index.php">Wine - Viticulture and Enology</a></li>
              </ul>
              <ul>
              <li>
              <h2>Employment</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Human Resources');" href="https://www.hancockcollege.edu/human_resources/index.php">Human Resources</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Employment Opportunities');" href="https://www.hancockcollege.edu/human_resources/employment-opportunities.php">Employment Opportunities</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'About AHC Student Employment');" href="https://www.hancockcollege.edu/cjpc/employment-resources.php">Student Employment</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'About AHC Career and Job Placement Center (CJPC)');" href="https://www.hancockcollege.edu/cjpc/index.php">Career and Job Placement Center (CJPC)</a></li>
              </ul>
              </div>
          </div>
        </li>


        <li class="dropdown">
            <a class="dropdown-toggle" href="#">College Resources</a>

          <div class="dropdown-menu"> 

            <div class="subnav">
              <ul>
              <li>
              <h2>Resources</h2>
              </li>
              <li><a href="https://www.hancockcollege.edu/dreamact/index.php">AB 540/Dream Act</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Bookstore');" href="http://www.bkstr.com/hancockcollegestore/home/en?cm_mmc=Redirect-_-VanityURL-_-hancockcollegeshop.com-_-433905" target="_blank">Bookstore</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Campus Graphics');" href="https://www.hancockcollege.edu/campus_graphics/index.php">Campus Graphics</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Cashier Services');" href="https://www.hancockcollege.edu/cashier_services/index.php">Cashier Services</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Children’s Center');" href="https://www.hancockcollege.edu/childrens_center/index.php">Children’s Center</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Children’s Center');" href="https://www.hancockcollege.edu/campus_police/index.php">College District Police Department</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Counseling');" href="https://www.hancockcollege.edu/counseling/index.php">Counseling</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Learning Assistance Programs');" href="https://www.hancockcollege.edu/lap/index.php">Learning Assistance Program</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Library');" href="https://www.hancockcollege.edu/library/index.php">Library</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Police and Safety');" href="https://www.hancockcollege.edu/campus_police/index.php">Police and Safety</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Student Health Center');" href="https://www.hancockcollege.edu/health_services/index.php">Student Health Center</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Student Helpdesk (805-922-6569)');" href="https://www.hancockcollege.edu/admissions_records/student-helpdesk.php">Student Helpdesk (805-922-6569)</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'College Resources Veteran Success Center');" href="https://www.hancockcollege.edu/veterans/index.php">Veteran Success Center</a></li>
              </ul>
              <ul>
              <li>
              <h2>Student Assistance and Tutoring</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources AIM Center');" href="https://www.hancockcollege.edu/aim/index.php">AIM Center</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Language Lab');" href="https://www.hancockcollege.edu/languagelab/index.php">Language Lab</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Math Center');" href="https://www.hancockcollege.edu/mathcenter/index.php">Math Center</a></li>
              <li><a href="https://www.hancockcollege.edu/mentorship/index.php">Mentorship Program</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources MESA');" href="https://www.hancockcollege.edu/mesa/index.php">MESA</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources STEM');" href="https://www.hancockcollege.edu/stem/index.php">STEM</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Tutorial Center');" href="https://www.hancockcollege.edu/tutoring/index.php">Tutorial Center</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'College Resources Writing Center');" href="https://www.hancockcollege.edu/writing/index.php">Writing Center</a></li>
              </ul>
              <ul>
              <li>
              <h2>Student Services</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources CAFYES (Foster Care Services)');" href="https://www.hancockcollege.edu/cafyes/index.php">CAFYES (Foster Care Services)</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources CalSOAP');" href="https://www.hancockcollege.edu/cal-soap/index.php">CalSOAP</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources CAlWorks');" href="https://www.hancockcollege.edu/calworks/index.php">CAlWorks</a></li>
              <li><a href="https://www.hancockcollege.edu/can/index.php">College Achievement Now (CAN/TRIO)&nbsp;</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources CAN/TRiO');" href="https://www.hancockcollege.edu/care/index.php">CARE</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources CAN/TRiO');" href="https://www.hancockcollege.edu/counseling/index.php">Counseling</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources EOPS');" href="https://www.hancockcollege.edu/eops/index.php">EOPS</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Learning Assistance Programs');" href="https://www.hancockcollege.edu/lap/index.php">Learning Assistance Program (LAP)</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Student Health Center');" href="https://www.hancockcollege.edu/health_services/index.php">Student Health Center</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'College Resources Student Helpdesk');" href="https://www.hancockcollege.edu/admissions_records/student-helpdesk.php">Student Helpdesk (805-922-6569)</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'College Resources Student Standing/Progress');" href="https://www.hancockcollege.edu/counseling/probation.php">Student Standing/Progress</a></li>
              <li class="last"><a href="https://www.hancockcollege.edu/testing/index.php">Testing Center</a></li>
              </ul>
              </div>
 
          </div>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" href="#">Students</a>

          <div class="dropdown-menu">


            <div class="subnav">
              <ul>
              <li>
              <h2>Programs and Degrees</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Departments');" href="https://www.hancockcollege.edu/academic_departments/index.php">Academic Departments</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Calendars and Deadlines');" href="https://www.hancockcollege.edu/admissions_records/calendar.php">Calendars and Deadlines</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Career Technical Education (CTE)');" href="https://www.hancockcollege.edu/cte/index.php">Career Technical Education (CTE)</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Catalog and Schedules');" href="https://www.hancockcollege.edu/public_affairs/schedules.php">Catalog and Schedules</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Class Search');" href="http://bannerweb.hancockcollege.edu/prod/pw_sigsched.p_search">Class Search</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Community Education');" href="https://www.hancockcollege.edu/community_education/index.php">Community Education</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Graduation Requirements');" href="https://www.hancockcollege.edu/counseling/ready-to-graduate.php">Graduation Requirements</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'Academics Programs of Study');" href="https://www.hancockcollege.edu/academic_departments/programs.php">Programs of Study (Majors)</a></li>
              </ul>
              <ul>
              <li>
              <h2>Transfer to University</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Associate Degrees for Transfer');" href="https://www.hancockcollege.edu/transferdegrees/index.php">Associate Degrees for Transfer</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics DegreeWorks');" href="https://www.hancockcollege.edu/degreeworks/index.php">DegreeWorks</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Guaranteed Transfer Program');" href="https://www.hancockcollege.edu/utc/tag.php">Guaranteed Transfer Program</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Transcripts');" href="https://www.hancockcollege.edu/admissions_records/transcripts.php">Transcripts</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Transfer Pathways');" href="https://www.hancockcollege.edu/utc/transfer-pathways/index.php">Transfer Pathways</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'Academics University Transfer Center');" href="https://www.hancockcollege.edu/utc/index.php">University Transfer Center</a></li>
              </ul>
              <ul>
              <li>
              <h2>Online Learning</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Canvas');" href="https://www.hancockcollege.edu/distance_learning/canvas.php" target="_blank">Canvas</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'Academics Distance Learning');" href="https://www.hancockcollege.edu/distance_learning/index.php">Distance Learning</a></li>
              </ul>
              <ul>
              <li>
              <h2>Student Life</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics ASBG/Student Government');" href="https://www.hancockcollege.edu/asbg/index.php">ASBG/Student Government</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Athletics');" href="http://athletics.hancockcollege.edu/landing/index">Athletics<br></a></li>
              <li><a href="https://www.hancockcollege.edu/food/index.php">Campus Cuisine/Coffee Shop</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Ambassadors');" href="https://www.hancockcollege.edu/ambassadors/index.php">Student Ambassadors</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Academics Clubs');" href="https://www.hancockcollege.edu/asbg/clubs.php">Student Clubs</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'Academics Employment');" href="https://www.hancockcollege.edu/cjpc/employment-resources.php">Student Employment</a></li>
              </ul>
              </div>

          </div>
        </li>


        <li class="dropdown">
            <a class="dropdown-toggle" href="#">Admissions &amp; Registration</a>

          <div class="dropdown-menu">
            <div class="subnav">
              <ul>
              <li>
              <h2>Applying for Admission</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions Apply for Admission');" href="https://www.hancockcollege.edu/apply/index.php">Apply for Admission</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions Apply for Community Education');" href="https://www.hancockcollege.edu/apply/index.php">Apply for Community Education</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions Apply for College Now! (High School)');" href="https://www.hancockcollege.edu/admissions_records/college-now.php">Apply for College Now! (High School)</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions Apply for Concurrent Enrollment (High School)');" href="https://www.hancockcollege.edu/concurrentenrollment/index.php">Apply for Concurrent Enrollment (High School)</a></li>
              </ul>
              <ul>
              <li>
              <h2>Getting Started</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions Steps to Enrollment');" href="https://www.hancockcollege.edu/future_students/index.php">Steps to Enrollment</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions DegreeWorks (Graduation Planning)');" href="https://www.hancockcollege.edu/degreeworks/index.php">DegreeWorks (Graduation Planning)</a></li>
              <li><a href="https://www.hancockcollege.edu/placement/index.php">English and Math Placement</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions English as a Second Language');" href="https://www.hancockcollege.edu/esl/index.php">English as a Second Language</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions Orientation/Academic Advising');" href="https://www.hancockcollege.edu/future_students/index.php">Orientation/Educational Planning</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'Admissions Visit Campus');" href="https://www.hancockcollege.edu/campuscruise/index.php">Visit Campus</a></li>
              <li class="last"><a href="https://outreach.hancockcollege.edu/Ellucian.ERecruiting.Web.External/Pages/events.aspx" target="_blank">Event Registration</a></li>
              </ul>
              <ul>
              <li>
              <h2>Registration</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions Class Search');" href="http://bannerweb.hancockcollege.edu/prod/pw_sigsched.p_search">Class Search</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions Priority Registration');" href="https://www.hancockcollege.edu/admissions_records/PriorityRegistration.php">Priority Registration</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'Admissions Register for Classes');" href="https://www.hancockcollege.edu/future_students/index.php">Register for Classes</a></li>
              </ul>
              <ul>
              <li>
              <h2>Admissions and Records</h2>
              </li>
              <li><a href="https://www.hancockcollege.edu/admissions_records/index.php">Admissions and Records Office</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions International Students');" href="https://www.hancockcollege.edu/admissions_records/international.php">International Students</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Admissions Transcripts');" href="https://www.hancockcollege.edu/admissions_records/transcripts.php">Transcripts</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'Admissions Resident Requirements');" href="https://www.hancockcollege.edu/admissions_records/residence-requirements.php">Resident Requirements</a></li>
              <li class="last"><a href="https://www.hancockcollege.edu/dreamact/index.php">Undocumented Students</a></li>
              </ul>
              </div>
          </div>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" href="#">Financial Aid</a>

          <div class="dropdown-menu">
            <div class="subnav">
              <ul>
              <li>
              <h2>Paying for College</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'Financial Aid Cost to Attend');" href="https://www.hancockcollege.edu/cashier_services/index.php">Cost to Attend</a></li>
              <li>Cost Comparison</li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'Financial Aid Bulldog Card');" href="https://www.hancockcollege.edu/cashier_services/bulldog-card.php">AHC Bulldog Card</a></li>
              </ul>
              <ul class="no-border">
              <li>
              <h2>Financial Assistance</h2>
              </li>
              <li><a onclick="ga('send','event','Main-Nav', 'Financial Aid Office');" href="https://www.hancockcollege.edu/financial_aid/index.php">Financial Aid Office</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Financial Assistance FAFSA');" href="https://fafsa.ed.gov/">FAFSA</a></li>
              <li><a href="http://www.csac.ca.gov/dream_act.asp" target="_blank">CA Dream Act</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Financial Aid Scholarships');" href="https://www.hancockcollege.edu/financial_aid/scholarships.php">Scholarships</a></li>
              </ul>
              <ul>
              <li></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Financial Assistance CalWORKs');" href="https://www.hancockcollege.edu/calworks/index.php">CalWORKs</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Financial Assistance CARE');" href="https://www.hancockcollege.edu/care/index.php">Cooperative Agencies Resources for Education (CARE)</a></li>
              <li><a onclick="ga('send','event','Main-Nav', 'Financial Assistance EOPS');" href="https://www.hancockcollege.edu/eops/index.php">Extended Opportunity Programs and Services (EOPS)</a></li>
              <li class="last"><a onclick="ga('send','event','Main-Nav', 'Financial Aid Veterans Affairs');" href="https://www.hancockcollege.edu/veterans/index.php">Veterans Affairs</a></li>
              </ul>
              </div>
          </div>
        </li> 



        <li class="dropdown dropdown-quicklinks">
          <a class="dropdown-toggle" href="#"><span class="d-lg-none">Quick Links</span> <span class="d-none d-lg-block sr-only">Quick Links</span><span class="fas fa-link"></span>
        </a>

        <div class="dropdown-menu">
          <div class="subnav">
         @include ('_partials.quicklinks')

        </div>
        </div>
      </li>


        <li class="dropdown dropdown-search">
          <a class="dropdown-toggle" href="#"><span class="d-lg-none">Search</span> <span class="d-none d-lg-block sr-only">Search</span><span class="fa fa-search"></span></a>

        <div class="dropdown-menu">
          <div class="subnav">
         @include ('_partials.searchform')
        </div>
        <div class="dropdown-extra-text">
          <p class="medium">What are other people searching for?</p>
          <ul class="list-inline">
            <li><a href="">Financial Aid</a></li>
            <li><a href="">Admissions</a></li>
            <li><a href="">myHancock</a></li>
            <li><a href="">Faculty &amp; Staff Directory</a></li>
          </ul>
        </div>
        </div>
      </li>




      
      </ul>
      <div class="d-block d-lg-none"> 
        <ul class="topnav-links">
          @include ('_partials.topnav') 
        </ul>
      </div>
    </div>
  </div>
</nav>