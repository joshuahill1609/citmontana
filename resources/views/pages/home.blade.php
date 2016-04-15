@extends('layout')


@section('content')

       <div class="jumbotron" style="background-image: url(img/cit_background_3.jpg);">
           
           <div class="dropdown text-center">
             <button class="btn btn-default dropdown-toggle btn-large" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <span id="dropdownMenu-text">Select Your County</span>
               <span class="caret" id="dropdownMenu-caret"></span>
             </button>
             <ul class="dropdown-menu" id="dropdownMenu-options" aria-labelledby="dropdownMenu1">
                 @foreach (App\Http\Utilities\County::all() as $county)
                     <li class="county-selection" rel="<?php echo $county; ?>"><a href="#">{{ $county }}</a></li>
                 @endforeach
             </ul>
           </div>
           
           <div class="row contact-info-row" >
             <div class="col-md-4 text-center">
                 <i class="fa fa-4x fa-inverse fa-taxi"></i>
                 <ul class="list-unstyled contact-info-card" >
                     <li><strong><u>Law Enforcement Contact</u></strong></li>
                     <li id="le-name"></li>
                     <li id="le-number"></li>
                     <li id="le-email"></li>
                 </ul>
             </div>
             <div class="col-md-4 text-center">
                 <i class="fa fa-4x fa-inverse fa-user-md"></i>
                 <ul class="list-unstyled contact-info-card">
                     <li><strong><u>Mental Health Contact</u></strong></li>
                     <li id="mh-name"></li>
                     <li id="mh-number"></li>
                     <li id="mh-email"></li>
                 </ul>
             </div>
             <div class="col-md-4 text-center">
                 <i class="fa fa-4x fa-inverse fa-calendar"></i>
                 <ul class="list-unstyled contact-info-card">
                     <li><strong><u>Next Class</u></strong></li>
                     <li id="class-location"></li>
                     <li id="class-date"></li>
                 </ul>
             </div>
           </div>
           
       </div>
       
       <div class="row" style="margin-bottom:20px;">
           <div class="col-md-3">
           </div>
           <div class="col-md-6">
               <p> <strong>C.I.T. Montana</strong> is an umbrella group that coordinates CIT training and development across the state. CIT programs are local initiatives built on strong partnerships between law enforcement, mental health providers, and individuals and families affected by mental illness. The C.I.T system attempts to divert mentally-ill individuals from the Montana State Hospital and the criminal justice system when possible and safe, and instead connect them to appropriate local mental health services that allow them to stay in their communities.
               </p>
               <p>
                    What is a CIT Officer? A CIT Officer thinks big picture, long term, and often outside the box to do what is right for the individual/community. A CIT Officer takes ownership and does not point fingers or blame. Asking himself/herself what more can I do to help this individual/community. A CIT Officer recognizes EVERY individual as a human being (what if this was my family member) accepting and respecting others as they are without judgement or evaluation. A CIT Officer strives to have a lasting positive affect on every situation he/she is a part of. 
                </p>
           </div>
           <div class="col-md-3">
           </div>
       </div>
       
       <div class="jumbotron" id="vitals-bar" style="background-image: url(img/cit_background_4.jpg);">
              <div class="row">
                <div class="col-md-4 text-center">
                    <p><strong>34 Counties</strong></p>
                </div>
                <div class="col-md-4 text-center">
                    <p><strong>600+ Officers</strong></p>
                </div>
                <div class="col-md-4 text-center">
                    <p><strong>Supporting Community Wellness</strong></p>
                </div>
              </div>
       </div>
            
        <div class="container">
              <!-- Example row of columns -->
              <div class="row">
                <div class="col-md-4">
                  <h2>Modern policing: CIT Montana trains officers to help mentally ill</h2>
                  <p>Bozeman Daily Chronicle: What do the voices that a schizophrenic person hears sound like?
An exercise that Gallatin County Sheriff’s Sgt. Jim Anderson gives his Crisis Intervention Team training participants includes audio that simulates what it could be like...

 </p>
                  <p><a class="btn btn-default" href="http://www.citmontana.com/news/1" target="_blank" role="button">Read More &raquo;</a></p>
                </div>
                <div class="col-md-4">
                  <h2>Wisetail Works</h2>
                  <p>(Bozeman, Mont.) – Bozeman technology firm, Wisetail, announced a $100,000 grant to Montana’s Crisis Intervention Team while launching the company’s new social, economic and environmental giving arm “Wisetail Works.” Montana-native Justin Bigart bucked the Silicon Valley tech startup culture by building Wisetail without venture capital, dedicated to being an independent, profitable and self-funded company. Since its inception in 2008...</p>
                  <p><a class="btn btn-default" href="http://www.citmontana.com/news/2" target="_blank" role="button">Read More &raquo;</a></p>
               </div>
                <div class="col-md-4">
                  <h2>Emergency responders take crisis intervention training</h2>
                  <p>KALISPELL, Mont. -
For the first time, emergency responders took part in a week-long training course that focuses on mental health-related crises.The course is hosted by the Flathead County Sheriff's Office, as well as the Crisis Intervention Team and the Western Montana Mental Health Center...</p>
                  <p><a class="btn btn-default" href="http://www.citmontana.com/news/3" target="_blank" role="button">Read More &raquo;</a></p>
                </div>
              </div>
            

@stop
