@extends('layouts.theme')
@section('content')

    @php
        $path = request()->path();
       
@endphp
<style>
body{
    font-family: 'Cabin', sans-serif;
    font-weight: 400;
    text-transform: inherit!important;
}
.sbl_course_list ul li{
    line-height: 1.8!important;
    font-size: 15px!important;
    text-align: justify!important;
    list-style-type: initial!important;
    margin-left: 15px;
}

.sbl_course_list {
    line-height: 1.8;
    font-size: 16px;
    text-align: justify;
}
.sbl_course_list h4{
font-size: 18px;
font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>
<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Complaint Policy</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'>Complaint Policy</li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container sbl_course_list">
            
            <div class="row">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>COMPLAINTS POLICY & PROCEDURE</h3>
            <p>SBL strives to provide quality in all of its activities. If a student feels dissatisfied with some aspect of their dealings with the Centre, it is important that he or she is entitled to complain, and to make their concerns known to our staff members. This guide serves to advise you of the appropriate procedure, and to inform you about the process. It is intended to provide guidance for situations in which a student (or a group of students) feels that the service that they have received from the Centre is unsatisfactory. Resolving small problems or areas of concern as they arise will often prevent escalation of the problem which could prove difficult to resolve. Students are encouraged to raise any issues of dissatisfaction at an early stage so that they can be dealt with effectively. A student will not be disadvantaged as a result of making a complaint or raising a matter of concern, provided that it is made in good faith.</p>
            <ul><li>

No action may be taken in the case of complaints made anonymously.</li><li>

If a group of learners wishes to make the same complaint, we will require one student to be nominated as a point of contact and representative for all. Please note that you must ensure that you follow the correct procedure, and fulfil the requirements yourself if you wish the complaint to be considered appropriately by the Centre.</li>

<li>Any vexatious or malicious complaints received will be subject to disciplinary action.</li>
</ul>
<p></p>
            <h4>SPECIAL NOTE: ACADEMIC APPEAL PROCEDURES</h4>
            <p>Complaints and appeals relating to Academic Appeals shall not at any stage be considered under this Complaints Procedure. The Complaints Procedure shall not apply to cases in which a student wishes to appeal against an academic decision; in such instances the student should follow the Appeals Procedure.</p>
            
            <h4>HANDLING OF COMPLAINTS</h4>
            <p>The Centre aims to handle complaints in a way that:</p>
            <ul>
            <li>is fair and efficient</li>
            <li>treats complaints with appropriate seriousness, sympathy and confidentiality</li>
            <li>facilitates early resolution</li>
            <li>allows the Centre or a particular section to learn from the experience</li>
            </ul>
            
            
            <h4>INFORMAL COMPLAINT</h4>


<p>If possible, a complaint should initially be addressed to the member of staff who is most directly concerned with the issue. In order to ensure that the complaint is raised at a mutually convenient time, the student should try to arrange an appointment with this person. The student should expect a response either immediately, or to be posted    (using normal mail or  e-mail  as  appropriate) within 10  working days if  the  matter has to be referred or if the person concerned is absent.

Staff will be happy to deal with complaints raised on an  informal  basis,  but  if  a  student feels unable to approach the person who is directly responsible, or if student considers that the matter has not been  satisfactorily  resolved,  the  student  should  raise their complaint with the Academic Coordinator or the Director, who will then refer the complaint for action as appropriate.

A student should expect a response within 5 working days of receipt of the complaint, although this may take longer if further investigation is required.

When a complaint has been satisfactorily resolved by these means, it is good practice for this to be confirmed and thereby recorded by a brief exchange of correspondence or emails between the complainant and the person who has addressed the complaint.

The Centre may pursue an informal complaint of a very serious nature through the formal route. Such a decision will not be taken lightly and the student's wishes will be taken into consideration.</p>

<h4>FORMAL COMPLAINT</h4>
<p>If your complaint cannot be solved informally, or if the matter is considered particularly serious, you will be asked to fill in and sign the Complaints form. The submission of a Complaints Form or letter, and its date of receipt, will represent the commencement of consideration under the Formal Complaints Procedure.

Your submission will  be  referred  by  the  Director,  for  consideration,  to  an  appropriate member of staff in the Centre. This member of staff will be asked to investigate your complaint and to advise the Director accordingly in writing of their response and any action proposed. You will then be advised of this outcome in writing, and of any action you should take in relation to it.
 



If it is felt that your grounds for pursuing the complaint are not justified, you will be advised why, and it will be confirmed that the Centre has completed its investigation of your complaint, has provided its final decision on it and does not intend to take the matter any further.


However, if your reasons for pursuing a complaint are considered to be justified, you will be invited to a meeting for an investigation of your complaint. You will be informed of the outcome in writing, indicating that the Centre has completed its investigation of your complaint, has provided its final decision on it and does not intend to take the matter any further.</p>

<h4>TIMESCALE FOR THE PROCEDURE</h4>

<p>The Centre will make every endeavour to deal with your complaint quickly. If there is a delay because of the nature of your complaint, or due to staff availability, you will be kept informed of progress.</p>
<ul>
<li>You should receive an acknowledgement of any written submission within 5 working days of its receipt, provided that you have followed the guidelines</li>
<li>You will normally receive an initial written response to your written complaint within 10 days of its receipt, provided that you have followed the guidelines</li>
<li>You will normally receive a final response to your complaint within 28 days from receipt of a formal submission, provided that you have followed the guidelines; but if your complaint is complex, this timescale may be extended</li>
	
</ul>
<p>If there are any exceptional time constraints relating to responding to your complaint, you will be advised at the earliest opportunity. Please note that these may emerge during consideration of your complaint, and it may not be possible to advise you of them at the beginning of the process.</p>

<p>WHEN MAKING A COMPLAINT YOUR RESPONSIBILITIES ARE:</p><ul>
<li>To state clearly the substance of your complaint;</li>
<li>To indicate as clearly as you can the remedy that you seek;</li>
<li>To follow the correct procedures as advised;</li>
<li>To provide written statements on request;</li>
<li>To attend any meeting about your complaint, when requested</li></ul>

<!--<p>Any formal complaints must be addresses to</p>

<pre>Academic Director
School of Business London 44 Broadway,
Stratford, London, E15 1XH,
United Kingdom</pre>-->
<p><a href="/download">Click here for downloading complaint form</a></p>
           </div>
           </div>
           </div>
        </section>
        @endsection