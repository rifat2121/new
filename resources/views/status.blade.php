<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8 />
  <title>Glass Website</title>
  <link rel="stylesheet" href="./fnt-awesome.min.css" />
  <link rel="stylesheet" href="./stle.css" />
  </head>
  <body>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div id="content" class="content content-full-width">
            <!-- begin profile -->
            <div class="profile">
               <div class="profile-header">
                  <!-- BEGIN profile-header-cover -->
                  <div class="profile-header-cover"></div>
                  <!-- END profile-header-cover -->
                  <!-- BEGIN profile-header-content -->
                  <div class="profile-header-content">
                     <!-- BEGIN profile-header-img -->
                    
                     <!-- END profile-header-img -->
                     <!-- BEGIN profile-header-info -->
                     <div class="profile-header-info">
                        <h2 class="m-t-10 m-b-5">Complain status</h2>
                       
                     </div>
                     <!-- END profile-header-info -->
                  </div>
                  <!-- END profile-header-content -->
                  
               </div>
            </div>
            <!-- end profile -->
            <!-- begin profile-content -->
            <div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-post tab -->
                  <div class="tab-pane fade active show" id="profile-post">




                     <!-- begin timeline -->

                   

                     <ul class="timeline">

                            @foreach ($data  as $data)

                        <li>
                           <!-- begin timeline-time -->

                           <!--<div class="timeline-time">
                              <span class="date">today</span>
                              <span class="time">04:20</span>
                           </div>-->

                           <!-- end timeline-time -->
                           <!-- begin timeline-icon -->
                           <div class="timeline-icon">
                              <a href="javascript:;">&nbsp;</a>
                           </div>
                           <!-- end timeline-icon -->
                           <!-- begin timeline-body -->


                           <div class="timeline-body">
                              <div class="timeline-header">
                                 <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                 <span class="username"><a href="javascript:;">User</a> <small></small></span>
                                 
                              </div>
                              <div class="timeline-content">
                                 
                                <tr>
     
                                  <th>{{$data->name}}</th>
                                  <td><img src="{{ asset('uploads/img/' . $data->image)}}" width="100px" height="100px"></td>
     
                                   </tr>

                              </div>
                              <div class="timeline-likes">
                  
                                 <div class="stats">
                                    <span class="fa-stack fa-fw stats-icon">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                    </span>
                                     <span class="fa-stack fa-fw stats-icon">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <a href="#" class="btn btn-sm btn-info mb-2">See More</a>
                                 </div>
                              </div>
                              <div class="timeline-footer">
                                 <div id='block-11' style='padding: 5px;'>
    <label for='option-11' style=' padding: 5px; font-size: 1.0rem;'>
      <input type='radio' name='option' value='6/24' id='option-11' style='transform: scale(1.0); margin-right: 2px; vertical-align: middle; margin-top: -2px;' />
     <h5> PROCESSING </h5></label>
    <span id='result-11'></span>
  
    <label for='option-12' style=' padding: 5px; font-size: 1.0rem;'>
      <input type='radio' name='option' value='6' id='option-12' style='transform: scale(1.0); margin-right: 2px; vertical-align: middle; margin-top: -2px;' />
      <h5> ACTION TAKEN </h5></label>
    <span id='result-12'></span>
    
        <label for='option-12' style=' padding: 5px; font-size: 1.0rem;'>
      <input type='radio' name='option' value='6' id='option-12' style='transform: scale(1.0); margin-right: 2px; vertical-align: middle; margin-top: -2px;' />
      <h5> FINISH </h5></label>
    <span id='result-12'></span>
    
  </div>
  <hr />
                    </div>
                              
                    </div>
                           <!-- end timeline-body -->
                    </li>


                    @endforeach
                       
                            <li>
                           <!-- begin timeline-icon -->
                           <div class="timeline-icon">
                              <a href="javascript:;">&nbsp;</a>
                           </div>
                           <!-- end timeline-icon -->
                           <!-- begin timeline-body -->
                           <div class="timeline-body">
                              <a href="#" class="btn btn-sm btn-info mb-2">More Complains....</a>
                           </div>
                           <!-- begin timeline-body -->
                           </li>


              </ul>


                     <!-- end timeline -->
                  </div>
                  <!-- end #profile-post tab -->
               </div>
               <!-- end tab-content -->
            </div>
            <!-- end profile-content -->
         </div>
      </div>
   </div>
</div>
</body>
</html>