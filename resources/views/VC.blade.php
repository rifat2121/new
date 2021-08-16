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

                          <div class="timeline-time">
                            <span class="date">{{$data->created_at->toDateString()}}</span>
                              <span class="time">{{$data->created_at->toTimeString()}}</span>
                           </div>

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
                                   
                               <h3>   <th>{{$data->name}}</th></h3>
                                
                               
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
                                    
                                 </div>
                              </div>

                              
                              <div class="timeline-footer">
                                 <div id='block-11' style='padding: 5px;'>


   

  


                      
                       <h3> <p style="color:green">STATUS</p><h3>
                          
                            <tr>
                              
                                <h3> <th>{{$data->status}}</th></h3>
                             
                            </tr>
                  
    

  
                      </div>
                    <hr />
                    </div>
                              
                    </div>
                           <!-- end timeline-body -->
                    </li>
                     </form>

                    @endforeach
                       
                            <li>
                           <!-- begin timeline-icon -->
                           <div class="timeline-icon">
                              <a href="javascript:;">&nbsp;</a>
                           </div>
                           <!-- end timeline-icon -->
                           <!-- begin timeline-body -->
                           <div class="timeline-body">
                              <a href="/" class="btn btn-sm btn-info mb-2">HOME</a>
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