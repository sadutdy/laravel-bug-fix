@extends('layouts.theme')
@section('content')

    @php
        $path = request()->path();
       
@endphp

<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Terms and Condition</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'>Terms and Condition</li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
<!-- <div class="about"> -->
<div class="col-sm-12 col-xs-12">
<!-- <div class="about_us_contnt"> -->
    <h3>ACCEPTANCE</h3>
 	<p>This agreement contains terms that are specific to students on Academic courses undertaken at our institution and includes general terms also applicable to all students of School of Business London. If you do not fully understand any part of this agreement or are uncertain as to your rights under it, please contact us for assistance. In order to ensure that your query is dealt with efficiently, please contact the admissions department.</p>

 	<p>School of Business London (<a href="https://www.sbusinesslondon.ac.uk">www.sbusinesslondon.ac.uk/</a>) to you subject to the terms and conditions prescribed here. Do not access or use this site, if you do not agree with any of the terms and conditions. Apart from Consumer Contracts 2013 (Information, Cancellation, and Additional Charges Regulations) or other legislation, no other representation can be made. Your use of this site shall be deemed to be your agreement to accept the terms provided here. You must read the terms and conditions before entering upon a transaction. and software on any personal media device; provided that you do not (and do not allow any third party to) copy, modify, create a derivative work from, reverse engineer, reverse assemble or otherwise attempt to discover any source code, sell, assign, sublicense, grant a security interest in or otherwise transfer any right in the Software. The Credentials offered by School of Business London are approved in the UK only. Neither we nor the awarding bodies accept any responsibility for approval of qualification outside the UK including, embassies, governments for immigration purposes or Universities for admission purposes. By registering with School of Business London, you represent that you are of legal age to form a binding contract. Further, you confirm that the information you provide is accurate, current and complete information about yourself wherever required in the application form. You agree to update your information if any of your information changes in the future. If we find that your information given is not accurate, complete, or up-to-date your account may be terminated or suspended.</p>

 <!--	<h3>AFFILIATION</h3>
 	<p>We are an approved centre of the awarding bodies such as CMI and QUALFI and deliver various Diploma Programs. We provide the Top-Up Degree courses by partnering with the organizations who have a partnership with the relevant Universities. We also have an Articulation Agreement with Charisma University located in Turks and Caicos’. We offer the programs awarded by OUS- Open University of Switzerland in partnership with EBMA a UK awarding body. By enrolling with us and you are subject to the terms and conditions, including the regulations, disciplinary procedure, and the prospectus, of the relevant university or awarding body.</p>-->

<!--<h3>AFFILIATION</h3>
 	<p>We are an approved centre of the awarding bodies such as CMI and QUALFI and deliver various Diploma Programs. We provide the Top-Up Degree courses by partnering with the organizations who have a partnership with the relevant Universities. We also have an Articulation Agreement with Anglia Ruskin University. We offer the programs awarded by OUS- Open University of Switzerland in partnership with EBMA a UK awarding body. By enrolling with us and you are subject to the terms and conditions, including the regulations, disciplinary procedure, and the prospectus, of the relevant university or awarding body.</p>-->

<h3>AFFILIATION</h3>
 	<p>School of Business London focus in delivering high quality education for learners world-wide and moulding them into aspiring professionals. We are an accredited learning centre of Chartered Management Institute (CMI) and offers various levels of Management and Leadership programs. Besides, we are accredited by other Ofqual.gov.uk regulated awarding bodies such as QUALIFI, NCC, British Computer Society to provide numerous Diploma in Business Management, Hospitality, Health and Social Care, Law, Computing Programs.

SBL works in partnership with “Chestnut Education Group” to promote the degree Top up programs awarded by Anglia Ruskin University and the University of Central Lancashire</p>

 	<!-- <h3>DEGREE PROGRAMS</h3>
	<p>You agree to accept that the Top-Up Degree courses validated by the University of the West of Scotland are delivered by ISD Global Business School (IGBS), and School of Business London do not involve in the delivery of the same. School of Business London recruit the learners to enroll with the ISD Global Business School (IGBS) upon the completion of the relevant diploma which leads to the Top Up degree validated by the University of the West of Scotland. However, School of Business London deliver the degree qualifications which are articulated by the Charisma University and the Open University of Switzerland. You agree and aware that School of Business London will collect Top Up degree fees along with the associated diploma course fee, and the collected fees for the Top Up program will be paid to the IGBS on behalf of you at the time of the relevant Top Up Degree enrolment. Enrolling to a Top Up Degree is subject to the successful completion of the diploma course which leads to the relevant Top Up Degree. School of Business London will not be held responsible once the student is enrolled for degree program; the student is required to directly approach the respective centre of the University. School of Business London only facilitates to any degree enrollment. In case of any complaints/ grievances regarding the delivery of assessment or certification, the student is liable to contact the respective study center of the University he/she is enrolled. You further accept that if you fail to accomplish the diploma program successfully and unable to enroll for the associated degree Top-Up, you will not be given any refund. You will be given a refund in such cases; the Top Course is withdrawn by the Centre/University or no more available. In case of online enrollment in degree programs by email or by phone, if you wish to withdraw from the program, you are entitled to a 14-day Cancellation Period (you may refer Refund Policy). We must receive your cancellation in writing within the Cancellation Period. Refund shall not be provided if requested after the Cancellation period. Refund will be only given after deducting the Diploma fees, and administration fees £300 and any outstanding assessments resit/resubmission fees. However, in the case of bankruptcy, liquidation or closure of any of our partnering organizations who deliver the Top Up degree programs, we cannot guarantee any refund, but we will endeavor to resolve the issues as best as we can. If you are terminated from the Top Up Degree program due to any late fees payment, you will not be offered any refund. By enrolling with us, you are subject to the terms and conditions, including the regulations, disciplinary procedure, and the prospectus, of the relevant university or awarding body.</p>-->

<h3>DEGREE PROGRAMS</h3>
	<p>Enrolling to a Top Up Degree is subject to the successful completion of the diploma course which leads to the relevant Top Up Degree. School of Business London only facilitates to any degree enrollment. In case of any complaints/ grievances regarding the delivery of assessment or certification, the student is liable to contact the respective study center of the University he/she is enrolled. You further accept that if you fail to accomplish the diploma program successfully and unable to enroll for the associated degree Top-Up, you will not be given any refund. You will be given a refund in such cases; the Top Course is withdrawn by the Centre/University or no more available. In case of online enrollment in degree programs by email or by phone, if you wish to withdraw from the program, you are entitled to a 14-day Cancellation Period (you may refer Refund Policy). We must receive your cancellation in writing within the Cancellation Period. Refund shall not be provided if requested after the Cancellation period. Refund will be only given after deducting the Diploma fees, and administration fees £300 and any outstanding assessments resit/resubmission fees. However, in the case of bankruptcy, liquidation or closure of any of our partnering organizations who deliver the Top Up degree programs, we cannot guarantee any refund, but we will endeavor to resolve the issues as best as we can. If you are terminated from the Top Up Degree program due to any late fees payment, you will not be offered any refund. By enrolling with us, you are subject to the terms and conditions, including the regulations, disciplinary procedure, and the prospectus, of the relevant university or awarding body.</p>


	<h3>ENROLLMENT </h3>
	<p>By accepting the agreement, you state that the knowledge of the English language is sufficient to complete the course. A confirmation mail will be received on your enrolment. You can also contact the Registry Department to confirm the enrolment status with the awarding body. If you have any sponsor to pay fees, or you have not met the entry requirements, or if your payment is not completed as contract; you will receive a "conditional offer letter", and your enrolment will not be processed and you will not receive the welcome mail until you meet to settle the conditions in the letter. Your registration with the relevant awarding body will be processed within 45 days from the enrolment date. You are requested to update any changes you make in your profile (name, address, contact number or e-mail address) not later than five days after registration.</p>
	
	<h3>ACTIVE STATUS</h3>
	<p>We expect students to remain active in Learning Portal after the enrollment. In state of being inactive in SBL Student Learning Portal (LMS) or in correspondence by email for a period of 60 days, we reserve the right to terminate your account. Prior to the termination, we may not provide any notification/warning for the automated deactivation.</p>

	<h3>FEES</h3>
	<p>Course and registration fees must be paid in UK £ Sterling by Bankers draft, bank transfer, PayPal, debit card and credit card. If payment is made in a currency other than sterling, you agree to cover the bank charges incurred by School of Business London to receive and exchange the payment.</p>
	<p>Course and registration fees are including the registration in the relevant awarding body or university, the examination/assignment and other fees charged by it, but exclusive of resubmission, resit, postage, or deferral fees, and any additional costs (e.g. accommodation) which you may incur whilst a student of ours.</p>
	<p>Any reduction in course fee is not allowed for the late enrolment of the student, and the student will be required to pay an additional late enrolment fee. For any outstanding fees, students are responsible for interests and penalties if the sponsor fails to pay the fees on time.</p>
	<p>Please see the ‘fees’ section of our website for details of the amounts payable for your course and registration fees.</p>
	<p>Please be warned that you must pay any charges incurred by our bank or the bank of the sender of your fees.</p>

	<h3>LATE/ NON-PAYMENT OF COURSE FEES</h3>
	<p>If you have not entered School of business London for a payment plan, your full course fees and registration fees must be paid completely. Late payments, dishonored cheques or cancelled standing orders will incur a £100 administration charge. Besides, you will be required to pay interest of 8% p/a on overdue amounts, accruing daily from the initial due date.</p>
	<p>If your fees are not paid, or you miss a payment plan, you may be expelled without a refund, or withhold documents such as certificates, transcripts, or student ID cards, if at any time, you have a balance of fees (including postage, resit, resubmission, or deferral fees) outstanding.</p>
	<p>If you have been enrolled for a program and delayed your fees payment you will be incurred a significant late payment charge or you may be even terminated from the program without any refund. In some cases, if there is an outstanding payment your assignments submission will not be accepted and marked as non-submission, you will need to pay both late payment charge and resubmission fees to resolve the issues.</p>
	<p>We reserve the right to take legal action against you and/or your sponsor if all or part of your fees are outstanding and/or refer the matter to a third-party debt recovery agency.</p>

	<h3>COURSE CHANGES AND DEFERRALS</h3>
	<p>It is mandatory for all students to complete the assignments. You are requested not to purchase “model answers”, or any form of assignment writing or extra study services or materials (If intended for any submission) from any but SBL’s authorized “white-list” providers. You cannot change the course or module once we register you with the awarding body. If you make any changes to your enrolment, like a change in course or mode of study; you must pay £250 as admin and re-registration fee to do so except in fully evidenced extenuating circumstances. For non-extenuating deferrals (change of intake or assessment submission date) you must re-register with both School of Business of London and the awarding body. (Fees to be confirmed). You can postpone an assessment or change the intake if the awarding body accepts the deferral under its regulations or by-laws. In any case, you can only defer once.</p>

	<h3>LEARNING PLATFORM</h3>
	<p>Once you have been accepted onto the course you applied, you will receive a password providing you with access to your personalized Learning Platform for the duration of your course. Your learning portal is equipped with learning resources such as Pathway materials, Lecture notes, assignment brief, policies and procedures and online tutor support services. Please note that we give no warranties or assurances as to quality or suitability of the contents of your Learning Platform.</p>

<h3>ACCESS TO BOOKS AND JOURNALS</h3>
<p> We at SBL offer comprehensive learning materials to the learners made by qualified and approved tutors. In order to accomplish the qualification, learners are needed to undertake further research and readings to achieve the learning outcomes. Thus for further research and readings learners  may  need to  access a number of books and/or journals ,articles from external sources such as libraries or online libraries when and where required. . If you are studying a CMI qualification, you will be provided with access to CMI Management Direct portal where you will have access to several eBooks, Journals and videos etc.</p>

<h3>TOTAL QUALIFICATION TIME(TQT) </h3>
	<p>Total Qualification Time (TQT) denotes the minimum timeframe a learner takes or requires to complete their qualification.It comprises of the GL (Hours) plus all other time taken in preparation,study or research or any other form of participation in education or training, however no direct supervision of a lecturer or tutor is required. TQT is a terminology mostly used within the qualifications regulated by Ofqual as part of the Regulated Qualification Framework (RQF).

When calculating TQT, Awarding bodies take into account similar qualifications to ensure that both the quality and the requirement is met. We also consider the views and expectations of the learners of our qualifications during the development process leading to the attainment of qualification.

Our learners will see TQT expressed in two ways within the qualification specifications:</p>

<h3>GUIDED LEARNING HOURS</h3>

<p>Guided Learning hours are designed in a way that the learner need to complete the activities/ presentations under the instruction, guidance or supervision of a lecturer, tutor or supervisor either by physical presence or electronic means such as prepared lecture slides or learning material.

 

Where a qualification follows a unitised structure, each unit will be allocated a GL(hours) value but where a qualification does not follow a unitised structure, GL (hours) will be allocated to the qualification as a whole.

 

We at School of Business London provide well precise and detailed learning materials, prepared by qualified and approved tutors in line with the specifications detailed by the awarding body. Besides, learners are given constructive formative feedback for each unit emphasising for learning and development.</p>



	<h3>BLENDED LEARNING </h3>
	<p>School of Business London employ Blended Learning, where a portion of the traditional face to face instruction is replaced by the web based learning. The blended learning provided by School of Business London does not include face to face classes or live classes on Learning portal. With our blended learning method, every student is allocated with a Tutor who will provide you with comprehensive guidance and support from the start to finish of your course through both email and learning portal. Moreover, the tutor provides timely feedback on your drafts submission to revise your paper.</p>
	<p>The blended learning offered by School of Business London only include the following:</p>

	<ul>
		<li>Allocated Tutor</li>
		<li>Live Chat</li>
		<li>Workshops</li>
		<li>E-Library</li>
		<li>Virtual Learning Platform</li>
		<li>Assessment Resources</li>
		<li>Assessment Guidelines </li>
		<li>Evaluation Samples</li>
	</ul>

	<h3>Assessment</h3>
	<p>School of Business London follow strict Assessment Policies that include both formative and summative assessment procedures. Formative and summative assessment feedbacks are the integral part of the assessment process. Learners must read and understand the Assessment policies and procedures that are available in your learning portal (LMS). Learners are provided only with two chances to make their assessment resubmissions. If the learners are unsuccessful in their all three attempts provided for any assessment, no further chance will be provided to resubmit the referred assignment. However, all elements taken as a second or third attempt will be capped at the pass mark. </p>

	<h3>REFUND</h3>
	<p>Please read this section very carefully. The refund policy emphasizes that once the payment is received and the student is given access to the Learning Portal, refunds are not available other than in the circumstances provided below. By signing the application form, you agree to the following terms and conditions as far as fees are concerned. School of Business London will consider refunds if one or more of the following circumstances exist.</p>

	<ul>
		<li>The College terminates/cancel a course which has already started</li>
		<li>The College is not able to provide an advertised course</li>
		<li>Students are entitled to get 14 days cancelation period, which starts on the day that a student is provided with their booking confirmation. If a student decided to withdraw/terminate their enrolment within the cancelation period a refund may be offered. However, once the Learning Portal is accessed by a student, this is indication of use of service and express acceptance of the above terms and conditions, and as a result no refunds will be given at that point, even within the standard cancelation period of 14 days.</li>
	</ul>

	<p>If after enrolment you decide to withdraw from your course for any other reason after the 14 days and you have accessed the Learning Portal you will not get a refund. If you have opted monthly instalments plan, then you must pay all unpaid instalments immediately.</p>
	<p>Request for a refund can only be considered if we received on a correctly completed form which is available upon request.</p>
	<p>Students will receive a full refund if the college terminates a course which has already started; however, all other refunds and credit notes will be subject to deductions for classes already attended, awarding body fees paid by the college on behalf of the student, assignment / examination fees where the college already registered your entry, unpaid fees in respect of other programs and an administration fees of £100.</p>
	<p>You further accept that if you fail to accomplish the diploma program successfully and unable to enroll for the associated degree Top-Up, you will not be given any refund. You will be given refund in such cases; the Top Course is withdrawn by the relevant Centre/University or no more available or we are not able to enroll you for the course for any reason. Refund will be only given after deducting the Diploma fees, an administration fees £300 and any outstanding assessments resit/resubmission fees. However, in the case of bankruptcy, liquidation or closure of any of our partnering institutions who delivers the Top Up degree programs, we cannot guarantee any refund but we will endeavor to resolve the issues as best as we can. If you are terminated from the program due to any late fees payment, you will not be offered any refund. By enrolling with us you are subject to the terms and conditions, including the regulations, disciplinary procedure, and the prospectus, of the relevant university or awarding body.</p>
	<p>We provide both accredited and non-accredited programs. The accredited programs are awarded by recognized awarding bodies and universities. We take no responsibility in the event if the awarding body or university loss its recognition/status from the relevant authority and no refunds will be given to you in such cases. You further accept that in the unlikely event that the accreditation(s) of School of Business London is withdrawn by the awarding body(s), you will not be refunded.</p>

	<h3>DATA PROTECTION</h3>
	<h4><strong>1.	What information do we collect about you?</strong></h4>
	<p>We collect information about you when you order a copy of one of our prospectuses or register to attend an event such as an open day or taster session, or register your interest in one of our courses or apply for one of our courses. We collect information such as your name, date of birth, e-mail and postal address, event or course of interest in order to fulfil your request and, if consent is given, to send you further relevant information about the college, courses you’re interested in, accommodation or events relevant to your course of interest.</p>

	<h4><strong>2.	How will your information be used?</strong></h4>
	<p>The information you provide will be used to supply the information requested and, if you consent, send you further printed materials or electronic communications about the School of Business London, the programmes we offer and our services, such as student support, course information, Promotions and scholarships. We may also contact you to conduct market research and quality assurance checks, for example we may ask you about your satisfaction with the information we provide and your experience of the admission process. We will not sell your data to third parties. We will also use the information you provide to evaluate the impact of our activities and track your progression through education if you have given us your consent.</p>

	<h4><strong>3.	What is our lawful basis for processing your personal data?</strong></h4>
	<p>Prior to application, we will process your data on the basis that you have given us consent to do so. Once you have applied to study at the college it has a legitimate interest to tell you about the college, its courses and other information you will need to make an informed decision about whether to attend the college. We also have a legal requirement to report back to the government based on a legitimate interest to widen participation for underrepresented groups in higher education.</p>

	<h4><strong>4.	Special Category Data</strong></h4>
	<p>In some of our activities, for example those related to widening participation to college from under- represented groups we need to collect data that is classified as special category (sensitive) personal data under data protection legislation, including details on ethnicity and race. This is processed based on public task under Article 6 of the General Data Protection Regulation (GDPR) as this data is collected in the public interest of improving access to higher education and condition J of Article 9(2) of the GDPR which states: processing is necessary for archiving purposes in the public interest, scientific or historical research purposes or statistical purposes to safeguard the fundamental rights and the interests of the data subject. This data may also be shared with government bodies, or organizations working on behalf of the government for research and analysis purposes.</p>

	<h4><strong>5.	Who your personal information is shared with?</strong></h4>
	<p>Your information will be processed by the college, awarding bodies working with the college for awarding the programs, and organizations working on its behalf (for example a company which posts letters on the college’s behalf) who have GDPR compliant processes in place. We will also share your information with any of our related partners, subsidiaries, awarding bodies, subcontractors and employees who provide services to you. We will share your information with the company who provide the Online Library services to create an account and get the access for the library. We may also share your information with other organizations if we sell or buy any business or assets, if we or a substantial part of our company assets are acquired by another party, if we have to share your information to comply with legal or regulatory requirements or if we have to enforce Our Terms and Conditions or any other agreements.</p>

	<h4><strong>6.	Transfers to third countries and safeguards in place</strong></h4>
	<p>We may transfer your information to process, or store it, outside the European Economic Area (“EEA”) in countries which do not have data protection laws as robust as those that are in place within the EEA. Please do not send us your information if you do not want it to be transferred or stored outside the EEA. By providing your information to us, you agree and consent to us transferring and storing it outside the EEA. Whenever data is transferred from one location to another it will always be in a secure, encrypted or password protected format.</p>

	<h4><strong>7.	How long will your information be held?</strong></h4>
	<p>General information you provide to us will be held for two years. If, however, you become an applicant you will be subject to other notices that we will provide to you and your data will be held in line with the college’s retention schedule. To evaluate the long-term impact of our widening participation activities, we will keep your data until five years after you have completed your program unless you tell us otherwise.</p>
	<p>If you have given your consent and you wish to withdraw it, you can opt out at any point by contacting us directly at support@sbusinesslondon.ac.uk.</p>

	<h4><strong>8.	What are your Rights?</strong></h4>
	<p>Under Data Protection Legislation you have the following rights:</p>
	<ul>
		<li>To request access to, and copies of, the personal data that we hold about you;</li>
		<li>To request that we cease processing your personal data;</li>
		<li>To request that we do not send you any marketing communications;</li>
		<li>To request us to correct the personal data we hold about you if it is incorrect;</li>
		<li>To request that we erase your personal data;</li>
		<li>To request that we restrict our data processing activities (and, where our processing is based on your consent, you may withdraw that consent, without affecting the lawfulness of our processing based on consent before its withdrawal);</li>
		<li>To receive  from  us  the  personal  data  you  have  provided to  us, in a  reasonable  format specified  by you, to another data controller;</li>
		<li>To object, on grounds relating to your particular situation, to any  of  our particular processing activities where you feel this has a disproportionate impact on your rights and freedoms.</li>
	</ul>
	<p>Please note that the above rights are not absolute, and we may be entitled to refuse requests where exceptions apply.</p>

	<h4><strong>9.	Security of your information</strong></h4>
	<p>Your data will be held securely and all staff are required to comply with the colleges’ processes and procedures regarding data security. Whenever data is transferred from one location to another it will always be in a secure format.</p>
	<p>Any requests or objections should be made in writing to the college’s Data Protection Officer, contact details are in Section 2 of this Privacy Notice.</p>

	<h4><strong>10.	Use of cookies</strong></h4>
	<p>Cookies are small pieces of information sent by an organization to your computer and stored on your hard drive to allow that organization to recognize the user when you next visit.</p>
	<p>The website (s) of School of Business London may employ cookies to help you personalise your online experience. It cannot be used to run programs or deliver viruses to your computer. By using cookies, we aim to save you time and let your browser know that you have come back to a specific page, and therefore the process of recording your personal information, delivery addresses, and so on are simplified.</p>
	<p>You can accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to experience the interactive features of our websites you visit fully.</p>

	<h4><strong>11.	Third party websites</strong></h4>
	<ul>
		<li>Hyperlinks to, and details of, third party websites are also included in our websites.</li>
		<li>School of Business London does not have any control over, and is not responsible for, the privacy policies and practices of any third parties.</li>
	</ul>

	<h4><strong>12.	 Identity and contact details of the Data Controller</strong></h4>
	<p>The School of Business London is registered with the Information Commissioner’s Office as a Data Controller and is committed to protecting the rights of individuals in line with Data Protection legislation. A copy of this registration can be found <a href="https://ico.org.uk/ESDWebPages/Entry/ZA352396" target="new">here</a>. </p>

	<h4><strong>13.	How to make a complaint</strong></h4>
	<p>If you have queries, concerns or wish to raise a complaint regarding the way in which your personal data has been processed you should contact the Data Protection Officer in the first instance, using the contact details under Section 2 above.</p>
	<p>Data Protection Officer </p>
	<p>School of Business London,44 Broadway , Stratford , E15 1XH , London , United Kingdom</p>
	<p>United Kingdom, Email: jabir@sbusinesslondon.ac.uk </p>
	<p>If you still remain dissatisfied, then you have the right to apply directly to the Information Commissioner’s Office (ICO) for a decision. The ICO can be contacted at:</p>
	<p>Information Commissioner’s Office, Wycliffe House,</p>
	<p>Water Lane, Wilmslow, Cheshire, SK9 5AF</p>
	<p>Telephone: 0303 123 1113</p>
	<p> Website: www.ico.org.uk </p>
	<p>This Privacy Notice may be updated from time to time to ensure continued compliance with Data Protection legislation and to reflect best practice.	</p>

	<h3>COMPLAINTS POLICY & PROCEDURE</h3>
	<p>We strive to provide quality in all its activities. If a student feels dissatisfied with some aspect of their dealings with the Centre, it is important that you entitled to complain and to make their concerns known to our staff members.</p>
	<p>This guide serves to advise you on the appropriate procedure and to inform you about the process. It is intended to guide situations in which a student (or a group of students) feels that the service that they have received from the Centre is unsatisfactory. Resolving small problems or areas of concern as they arise will often prevent escalation of the problem which could prove difficult to solve. Students are encouraged to raise any issues of dissatisfaction at an early stage so that they can be dealt with efficiently. A student will not be disadvantaged as a result of making a complaint or raising a matter of concern, provided that it is made in good faith.</p>

	<ul>
		<li>No action may be taken in the case of complaints made anonymously.</li>
		<li>If a group of learners wishes to make the same complaint, we will require one student to be nominated as a point of contact and representative for all. Please note that you must ensure that you follow the correct procedure, and fulfil the requirements yourself if you wish the complaint to be considered appropriate by the college.</li>
		<li>Any vexatious or malicious complaints received will be subject to disciplinary action.</li>
	</ul>

	<h4><strong>Special note: Academic Appeal Procedures</strong></h4>
	<p>Complaints and appeals relating to Academic Appeals shall not at any stage be considered under this Complaints Procedure. The Complaints Procedure shall not apply to cases in which a student wishes to appeal against an academic decision; in such instances, the student should follow the Appeals Procedure.</p>

	<h4><strong>Handling of complaints</strong></h4>
	<p>The Centre aims to handle complaints in a way that: </p>
	<ul>
		<li>is fair and efficient</li>
		<li>treats complaints with appropriate seriousness, sympathy and confidentiality</li>
		<li>facilitates early resolution</li>
		<li>allows the Centre or a section to learn from the experience</li>
	</ul>

	<h4><strong>Informal complaint</strong></h4>
	<p>If possible, a complaint should initially be addressed to the member of staff who is most directly concerned with the issue. To make sure that the complaint is put at a mutually convenient time, the student should try to arrange an appointment with this person. The student should expect a response either immediately, or to be posted (using standard mail or e-mail as appropriate) within ten (10) working days if the matter has to be referred or if the person concerned is absent.</p>
	<p>We will be happy to deal with complaints raised on an informal basis, but if you are not able to approach the person who is directly responsible, or if student considers that the matter has not been satisfactorily resolved, the student should raise their complaint with the Academic Coordinator or the Director, who will then refer the complaint for action as appropriate.</p>
	<p>A student should expect a response within 5 working days of receipt of the complaint, although this may take longer if further investigation is required.</p>
	<p>When a complaint has been satisfactorily resolved by these means, it is good practice for this to be confirmed and thereby recorded by a brief exchange of correspondence or emails between the complainant and the person who has addressed the complaint.</p>
	<p>We may pursue an informal complaint of a severe nature through the formal route. Such a decision will not be taken lightly, and the student's wishes will be taken into consideration.</p>

	<h4><strong>Formal Complaint</strong></h4>
	<p>If your complaint cannot be solved informally, or if the matter is considered particularly serious, you will be asked to fill in and sign the Complaints form. The submission of a Complaints Form or letter, and its date of receipt will represent the commencement of consideration under the Formal Complaints Procedure.</p>
	<p>Your submission will be referred by the Director, for consideration, to an appropriate member of staff in the Centre. This member of a team will be asked to investigate your complaint and to advise the Director accordingly in writing of their response and any action proposed. You will then be notified of this outcome in writing, and of any action, you should take in relation to it.</p>
	<p>If it is felt that your grounds for pursuing the complaint are not justified, you will be advised why, and it will be confirmed that the Centre has completed its investigation of your complaint, has provided its final decision on it and does not intend to take the matter any further.</p>
	<p>However, if your reasons for pursuing a complaint are justified, you will be invited to a meeting for an investigation of your complaint. You will be informed of the outcome in writing, indicating that the Centre has completed its investigation of your complaint, has provided its final decision on it and does not intend to take the matter any further.</p>

	<h4><strong>Timescale</strong></h4>
	<p>The Centre will make every endeavor to deal with your complaint quickly. If there is a delay because of the nature of your complaint, or due to staff availability, you will be kept informed of progress.</p>

	<ul>
		<li>You should receive an <i>acknowledgement</i> of any written submission within 5 working days of its receipt, provided that you have followed the guidelines.</li>
		<li>You will normally receive an initial written response to your written complaint within 10 days of its receipt, provided that you have followed the guidelines.</li>
		<li>You will typically receive a final response to your complaint within 28 days from receipt of a formal submission, provided that you have followed the guidelines; but if your complaint is complex, this timescale may be extended</li>
	</ul>

	<h4><strong>WHEN MAKING A COMPLAINT YOUR RESPONSIBILITIES ARE:</strong></h4>
	<ul>
		<li>To state clearly the substance of your complaint;</li>
		<li>To indicate as clearly as you can the remedy that you seek;</li>
		<li>To follow the correct procedures as advised;</li>
		<li>To provide written statements on request;</li>
		<li>To attend any meeting about your complaint, when requested</li>
	</ul>

	<h4><strong>If the learners remain dissatisfied what should be done?</strong></h4>
	<p>School of Business London will make every endeavour to deal with your complaint quickly and efficiently. If the learners are dissatisfied with the internal complaints procedures of School of Business London, Learners have all the rights to contact the relevant awarding body (s) directly to resolve the issues effectively.</p>

	<p><strong>
		Any formal complaints must be addresses to The Academic Director<br/>
		School of Business London<br/>
		44 Broadway,
		Stratford,
		E15 1XH<br>
		London , United Kingdom

	</strong></p>

	<h3>INTELLECTUAL PROPERTY</h3>
	<p>School of Business London grants you a personal, non-transferable and non-exclusive right to use its materials, contents and software on any personal media device; provided that you do not (and do not allow any third party to) copy, modify, create a derivative work from, reverse engineer, reverse assemble or otherwise attempt to discover any source code, sell, assign, sublicense, grant a security interest in or otherwise transfer any right in the Software.</p>

	
	<h3>TUTOR SUPPORT </h3>
	<p>School of Business London occupies a centralised tutor support portal, through which our support team liaise with both tutors and learners to provide guidance, feedback, and any other support. Once a learner raises a support request through the support desk portal (Be it for guidance, feedback or any other assistance), one of the support team members assign the relevant to request to an allocated tutor. As soon as the support receive a response from the allocated tutor, it will be made available to the learner in the portal. The support desk system is in place to assist the learners adequately and to streamline all the support process efficiently. Learners should expect to receive a response on queries like guidance and assistance within 1-3 working days. However, if the support request is for an assessment feedback, learners will receive the reply with feedback as per the time frame outlined in the Assessment Feedback Policy.</p>

<h3> RESUBMISSION </h3>
	<p>Learners are given two chances of resubmission if referred/failed. However, all elements taken as a second or third attempt will be capped at the pass mark. Learners will be charged £65.00 for each resubmission of a unit. School of Business London is committed to provide excellent service for learners who enrolled for the programs. Thus, if a learner is referred, SBL will make available the mark sheet and detailed feedback to the learners, so that the learner can determine the mistakes and discrepancies of their works. Learners are given two chances of resubmissions. Hence, as soon as the resubmission assignment brief is provided by the awarding body, the tutor will ensure that the learner gets adequate guidance and support for their resubmission assessment. Tutors will monitor the learner’s resubmission assessment and provide formative feedback to the learner as an essential resource so the students can take active steps to ensure that they achieve pass. The formative review includes feedback that is non-evaluative, specific, timely, and related to the learning goals, and that provides opportunities for the student to revise and improve work products and deepen understanding.

.</p>

	<h3>UNITS INTERCHANGE</h3>
	<p>Being an approved centre, School of Business London reserve the right to preselect units to deliver each qualification. For every course, SBL has preselected units (modules) as per the criteria among the various units listed in the course specification provided by the awarding body. The preselected units are shown in the details page of every course on our website.</p>
	<p> Learners must request before enrolment to interchange unit(s) other than the preselected units shown in the SBL website because we need to make sure the availability of learning materials for the requested unit(s).  SBL will reject an application if the learning materials for the requested interchange unit(s) are unavailable.</p>
	<p> Learners are not allowed to make any request to interchange unit(s) once enrolment is complete.    </p>

	<h3>LIMITATION OF  LIABILITY </h3>
	<p>WE EXCLUDE LIABILITY FOR ACCIDENTAL: INJURY TO ANY PERSON, LOSS OR DAMAGE TO MATERIAL (INCLUDING PERSONAL) PROPERTY, OBSTRUCTION, TRESPASS, NUISANCE OR INTERFERENCE WITH ANY RIGHT OF WAY, LIGHT, AIR, WATER OR EASEMENT HAPPENING IN CONNECTION WITH SCHOOL OF BUSINESS LONDON LTD. WE EXCLUDE LIABILITY FOR DAMAGE OR DISTRESS BY REASON OF INACCURACY OF DATA, LOSS OF DATA, DESTRUCTION OF DATA WITHOUT OUR AUTHORITY, OR THE DISCLOSURE OF DATA OR ACCESS HAVING BEEN OBTAINED TO DATA WITHOUT OUR AUTHORITY. WE EXCLUDE LIABILITY FOR WRONGFUL ARREST, FALSE IMPRISONMENT, MALICIOUS PROSECUTION, AND ASSOCIATED DEFAMATION OF OR ASSAULT ON ANY PERSON ARISING OUT OF THEFT OR SUSPICION OF THEFT AT THE PREMISES OF SCHOOL OF BUSINESS LONDON) AND ITS AFFILIATED PARTNERS. WE CANNOT BE HELD RESPONSIBLE FOR ANY DELAY OR FAILURE TO COMPLY WITH OUR OBLIGATIONS IF SUCH DELAY OR FAILURE ARISES FROM ANY CAUSE WHICH IS BEYOND OUR CONTROL. EXAMPLES OF SUCH CAUSES INCLUDE TERRORIST ATTACKS AND NATURAL DISASTERS.</p>
	<p>UNDER THIS AGREEMENT, AT ANY TIME, WE SHALL BE DEEMED TO HAVE WAIVED NEITHER OUR RIGHTS AND REMEDIES NOR ANY DEFAULT OF YOURS. BY THE CONTRACTS (RIGHTS OF THIRD PARTIES) ACT 1999, NO RIGHT/RIGHTS OR REMEDY/REMEDIES SHALL APPLY TO ANY PERSON WHO IS NOT A PARTY TO THIS AGREEMENT.</p>
	<p>IF A COURT OR COMPETENT AUTHORITY DEEMS ANY OF THESE TERMS TO BE INVALID, UNLAWFUL OR UNENFORCEABLE TO ANY EXTENT, SUCH TERM/TERMS SHALL NO LONGER FORM PART OF THIS AGREEMENT, THOUGH THIS WILL NOT AFFECT THE REMAINING CONDITIONS AND YOU WILL CONTINUE TO BE BOUND BY THEM.</p>
	<p>TO THE BEST OF OUR KNOWLEDGE, ALL THE INFORMATION CONTAINED IN THIS AGREEMENT IS CORRECT AT THE TIME OF PUBLICATION</p>

	<h3>WARRANTY DISCLAIMER</h3>
	<p>YOU AGREE THAT YOUR USE OF THE WEBSITE SHALL BE AT YOUR SOLE RISK. TO THE FULLEST EXTENT PERMITTED BY LAW, SCHOOL OF BUSINESS LONDON LTD, AND ANY SUBSIDIARY, PARENT, AFFILIATE, OFFICER, DIRECTOR, LICENSOR, EMPLOYEE, SUPPLIER, DISTRIBUTOR, RESELLER AGENT, OWNER, OR OPERATOR OF SCHOOL OF BUSINESS LONDON LTD, DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN CONNECTION WITH THE WEBSITE AND YOUR USE THEREOF. SCHOOL OF BUSINESS LONDON LTD MAKES NO WARRANTIES OR REPRESENTATIONS ABOUT THE ACCURACY OR COMPLETENESS OF THE WEBSITES CONTENT OR THE CONTENT OF ANY SITES LINKED TO THIS SITE AND ASSUMES NO LIABILITY OR RESPONSIBILITY FOR ANY (I) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT, (II) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE WEBSITE, (III) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION STORED THEREIN, (IV) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE WEBSITE, (IV) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH OUR WEBSITE BY ANY THIRD PARTY, AND/OR (V) ANY OMISSIONS OR ERRORS IN ANY CONTENT OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, EMAILED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE WEBSITE. SCHOOL OF BUSINESS LONDON LTD DOES NOT WARRANT, GUARANTEE, ENDORSE, OR ASSUME RESPONSIBILITY FOR ANY HYPERLINKED WEBSITE OR OTHER PROMOTION, AND SCHOOL OF BUSINESS LONDON LTD WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES. NO INFORMATION OR ADVICE, WHETHER WRITTEN OR ORAL, OBTAINED BY YOU FROM SCHOOL OF BUSINESS LONDON LTD OR THROUGH OR FROM THE SERVICE SHALL CREATE ANY WARRANTY NOT EXPRESSLY STATED IN THE TERMS OF USE. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE.</p>

	<h3>JURISDICTION AND LITIGATION</h3>
	<p>This agreement is made subject to the laws of England and Wales. You agree that any dispute arising under a term of this agreement shall be subject to the non-exclusive jurisdiction of the courts of England and Wales.</p>


<b><i>Our terms and conditions are updated periodically.  We encourage and recommend our learners to navigate through our terms and conditions from time to time. This will help you to be abreast of the updates and changes.

Please be advised, the new updations will not be applicable to our existing learners. The learners who have abided to the terms and conditions at the time of their enrollment is taken into consideration.
</i></b><br>
<i style="float:left">Updated On September 09</i>


</div>
</div>

<!-- </div>
</div> -->
@endsection