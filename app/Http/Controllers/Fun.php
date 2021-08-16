<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Models\company;
use App\Models\image;
use App\Models\z;
use App\Models\message;
use App\Models\hcell;
use App\Models\proctor;
use App\Models\studenta;
use App\Models\ad;
class Fun extends Controller
{
  
  
  
    public function store(request $request)
    {
      $name=$request->input('name');
     
      
      $email=$request->input('email');
      $password=$request->input('password');
      $verified="VERIFIED";
      $username=$request->input('username');
      $food=$request->input('food');
      $hobby=$request->input('hobby');
      $colour=$request->input('colour');


        if($name=="admin"||$name=="studentadvisor"||$name=="hcell"||$name=="proctor"||$name=="VC")
      {

         $registration=0;

         $ab=new company();

         $ab->name=$name;
         $ab->email=$email;
         $ab->password=$password;
         $ab->verified=$verified;
         $ab->username=$username;
         $ab->food=$food;
         $ab->hobby=$hobby;
         $ab->singer=$colour;
         $ab->registration_num=$registration;
         $ab->save();

        


          return redirect('reg');
      }else{


       $registration=$request->input('registration_num');
       $reg=$registration;
       $registration=substr($registration,0,4);

        $dada=Company::where('email',$email)->get()->count();
        $dadi=Company::where('regnum',$reg)->get()->count();

            if($dada==1||$dadi==1)
            {
              return view('de');
            }else
            {


        $ab=new company();

         $ab->name=$name;
         $ab->email=$email;
         $ab->password=$password;
         $ab->verified=$verified;
         $ab->username=$username;
         $ab->food=$food;
         $ab->hobby=$hobby;
         $ab->singer=$colour;
         $ab->registration_num=$registration;
         $ab->regnum=$reg;
         $ab->save();




     

          return redirect('reg');
        }
    }
  }



     public function storee(request $request)
    {
     
      
      $name=$request->input('name');
      $email=$request->input('email');
      $password=$request->input('password');
      $verified="NOT VERIFIED";
      $username=$request->input('username');
      $food=$request->input('food');
      $hobby=$request->input('hobby');
      $colour=$request->input('colour');



      if($name=="admin"||$name=="studentadvisor"||$name=="hcell"||$name=="proctor"||$name=="VC")
      {

      
            $registration=0;

         $ab=new company();

         $ab->name=$name;
         $ab->email=$email;
         $ab->password=$password;
         $ab->verified=$verified;
         $ab->username=$username;
         $ab->food=$food;
         $ab->hobby=$hobby;
         $ab->singer=$colour;
         $ab->registration_num=$registration;
         $ab->save();

     
      
              return redirect('firstr');
      }else{

            $registration=$request->input('registration_num');
            $reg=$registration;
     
            $registration=substr($registration,0,4);
            $dada=Company::where('email',$email)->get()->count();
              $dadi=Company::where('regnum',$reg)->get()->count();

            if($dada==1||$dadi==1)
            {
              return view('de');
            }else
            {

    $ab=new company();

         $ab->name=$name;
         $ab->email=$email;
         $ab->password=$password;
         $ab->verified=$verified;
         $ab->username=$username;
         $ab->food=$food;
         $ab->hobby=$hobby;
         $ab->singer=$colour;
         $ab->registration_num=$registration;
         $ab->regnum=$reg;
         $ab->save();



          return redirect('firstr');
        }
        }
    }




     public function login(request $request)
    {


      
        $email=$request->input('email');
     
        $password=$request->input('password');

       $m= Company::where('email',$email)->where('password',$password)->get()->count();
  

  if($m==1){

      $data=Company::where('email',$email)->where('password',$password)->firstOrFail();
     
      if($data->verified=="VERIFIED")
      {
       if("admin"==$data->name)
       {
        return view('a');
       }
       else if("VC"==$data->name)
       {

        return redirect('VC');
         
          
       }
       else if("student"==$data->name)
       {
        session()->put('key', $data->email);
        session()->put('ke', $data->username);
         

        return view('studentpage');
       }
       else if("studentadvisor"==$data->name)
       {
         
         session()->put('key', $data->name);
          return redirect('output');

          
       }else if("proctor"==$data->name)
       {
        session()->put('key', $data->name);
        
          return redirect('output');
          
       }else if("hcell"==$data->name)
       {
         //$this->var =$data->name;
          session()->put('key', $data->name);
         
          return redirect('output');
          
       }
      }
       else
         {
            return view('pls');
          }
 

  }else
  {
    
   return view('wrong');
  }



}



    public function index(request $request)
  {

      $ab=new image();
       $ab->status="pending";
      $ab->email=(session('key'));
      $ab->username=(session('ke'));
      $ab->name=$request->input('name');
      $ab->type=$request->input('type');
      $mu=$request->hasfile('image');

     
      
      if($mu)
      {

         $file=$request->file('image');
         $extension=$file->getClientOriginalExtension();
         $filename=time() . '.' .$extension;
         $file->move('uploads/img/',$filename);
         $ab->image=$filename;
        
      }
      else
      {
        //return $request;
        $ab->image='';

         
      }
      $ab->save();
      return view('studentpage');

  }  


  public function VCC()
  {



   $data=image::all();

   return view('VC',['data'=>$data]);
  }


         public function display()
      {
        
        
    
    // $data= image::all();
     $opol=(session('key'));
   
     $data=image::where('type',$opol)->orderby('id', 'desc')->get();
   //  $data=$data->sortBy('id', 'desc');
     

       return view('output',['data'=>$data]);
       
   
     }


     public function status(request $request)
     {
      

          $data=($request->input('a'));
               
         $b= preg_split("/[,]/",$data);
        

          $b= preg_split("/[,]/",$b[0]);
          $m=strlen($b[0]);
         // dd($m);
           $m=$m-6;
          $dat=substr($b[0],6 ,$m);
          //dd($dat);

         // dd(($request->input('name')));

          $name=$request->input('name');
        if($name=="Finish")
        {
          image::where('id',$dat)->delete();

        }else
        {

           $data=image::where('id',$dat)->firstOrFail();

         // dd($data->id);
         
           DB::table('image')->where('id', $data->id)->update(array('status' =>  $name)); 
          } 
           //return view('output');
            return redirect('output');
            
        }




        public function new()
      {
        
        
      
     $opol=(session('key'));
    


     $data=image::where('email',$opol)->orderby('id', 'desc')->get();
    // $data=$data->sortBy('id', 'desc');
     
      //dd($data);
       return view('outpu',['data'=>$data]);
       
   
     }
    
    public function verified()
      {
        
        $opol="NOT VERIFIED";
       $data=company::where('verified',$opol)->get();
      // dd($data);
       return view('verified',['data'=>$data]);
   
     }


     public function cv(request $request)
      {
        
       
           $data=($request->input('a'));
               
         $b= preg_split("/[,]/",$data);
        

          $b= preg_split("/[,]/",$b[0]);
            
          $m=strlen($b[0]);
         // dd($m);
          $m=$m-6;
          $dat=substr($b[0],6 ,$m);
          $name=$request->input('name');
          if($name=="VERIFIED")
          {

           DB::table('company')->where('id',$dat)->update(array('verified' =>  $name));
          return redirect('verified');
        }else
        {
          DB::table('company')->where('id',$dat)->delete();
           return redirect('verified');
        }
   
     }




      public function m(request $request)
      {
        
       
          
          $c=message::where('user',session('key'))->get()->count();
         
         if($c==1)
         {
          
            DB::table('message')->where('user',session('key'))->update(array('message' => $request->input('message') ));
          
                       
         }else
         {
          $ab=new message();
          $ab->message=$request->input('message');
          $ab->user=(session('key'));
          $ab->save();
        }

        return redirect('/output');
   
     }




     public function front()
      {
        
       
          $data=message::all();
           $dat=z::all();



         return view('first',compact('data','dat'));
        
        
   
     }


     public function zz(request $request)
      {
        



         
          $c=z::all()->count();
         
         if($c==1)
         {
          
            DB::table('z')->where('id',1)->update(array('message' => $request->input('message') ));
          
                       
         }else
         {
            $ab=new z();
          $ab->message=$request->input('message');
          $ab->save();
        }

         return redirect('output');
        
        
   
       }


       public function forget(request $request)
      {
        

      $name=$request->input('name');
      $email=$request->input('email');
      $food=$request->input('food');
      $hobby=$request->input('hobby');
      $colour=$request->input('colour');
       $password=$request->input('password');
       
       $data=Company::where('name',$name)->where('email',$email)->where('food',$food)->where('hobby',$hobby)->where('singer',$colour)->get()->count();

       if($data==1)
       {


            DB::table('company')->where('email',$email)->update(array('password' =>  $password));
            return redirect('/front');
       }
       else
       {
         return view('wrong');


       }

         
          
        
        
   
     }

   public function end()
   {

          $name=(session('key'));
          $email=(session('email'));
       
          if($name=="studentadvisor"){
            
            
            DB::table('studenta')->where('email',$email)->delete();
        
            $data=DB::table('studenta')->where('email',$email)->get();
            return view('chat',compact('data'));
               
                
                 
                
                }
                else if($name=="proctor"){
          
             DB::table('proctor')->where('email',$email)->delete();
         
             $data=DB::table('proctor')->where('email',$email)->get();
                
                 
                
                 return view('chat',compact('data'));
                
           
                
                
               }
               else{


              DB::table('hcell')->where('email',$email)->delete();
               
              $data=DB::table('hcell')->where('email',$email)->get();
                
              return view('chat',compact('data'));
                
  

                
                 }

   }


     public function ch(request $request)
      {


       
          $data=($request->input('a'));
               
         $b= preg_split("/[,]/",$data);
        

          $b= preg_split("/[,]/",$b[1]);
            //dd($b);
          $m=strlen($b[0]);
         // dd($m);
          $m=$m-10;
          $dat=substr($b[0],9,$m);

          $o=($request->input('ab'));
      
       session()->put('email', $dat);

       session()->put('ab',$o);
      
    


          $chat=-5;
          session()->put('number',$chat);
          $message=(session('ab'));
          $name=(session('key'));
          $email=(session('email'));
       
          if($name=="studentadvisor"){
            
            
            $data=DB::table('studenta')->where('email',$email)->get()->take(-5);
        
           
            return view('chat',compact('data'));
               
                
                 
                
                }
                else if($name=="proctor"){
          

         
             $data=DB::table('proctor')->where('email',$email)->get()->take(-5);
                
                 
                
                 return view('chat',compact('data'));
                
           
                
                
               }
               else{



               
              $data=DB::table('hcell')->where('email',$email)->get()->take(-5);
                
              return view('chat',compact('data'));
                
  

                
                 }





     }

     public function cha(request $request)
     {

          

          $message=$request->input('message');
          $name=(session('key'));
          $email=(session('email'));
          

          
                  
          
       
           if($name=="studentadvisor"){
            
            if($message==session('previous'))
                  {
                     $data=DB::table('studenta')->where('email',$email)->get()->take(-5);

                   
                     return view('chat',compact('data'));

                 }
                 
              else{

                $ab=new studenta();
                $ab->name=$name;
                $ab->email=$email;
                $ab->message=$message;
                $ab->save();
                
                
               $data=DB::table('studenta')->where('email',$email)->get()->take(-5);

              session()->put('previous',$message);
              return view('chat',compact('data'));
               }



             }else if($name=="proctor"){
          
                     
              if($message==session('previous'))
                 {
                  $data=DB::table('proctor')->where('email',$email)->get()->take(-5);
                  return view('chat',compact('data'));

                  }else{

                     $ab=new proctor();
                $ab->name=$name;
                $ab->email=$email;
                $ab->message=$message;
                     $ab->save();
               
                   $data=DB::table('proctor')->where('email',$email)->get()->take(-5);
                    session()->put('previous',$message);
                    return view('chat',compact('data'));
                  }
              
         }else{


                   if($message==session('previous'))
                 {
                    
                  $data=DB::table('hcell')->where('email',$email)->get()->take(-5);
                  return view('chat',compact('data'));

                  }


             
                else{ 


                   $ab=new hcell();
                $ab->name=$name;
                $ab->email=$email;
                $ab->message=$message;
                $ab->save();
                 
                 
                    session()->put('previous',$message);
             
                   
              $data=DB::table('hcell')->where('email',$email)->get()->take(-5);
                  return view('chat',compact('data'));
            }


        }

    }
    public function pc()
    {


             $name=(session('key'));
             $email=(session('email'));
             $chat=session('number');

          
                   if($name=="studentadvisor"){
                   

                    $mubin=DB::table('studenta')->where('email',$email)->get()->count();

                    if($mubin<=5)
                    {
                      $data=DB::table('studenta')->where('email',$email)->get();
                       return view('chat',compact('data'));
               

                    }else
                    {
                      $mubin=$mubin*(-1);
                       $opol=session('number');


                        if($mubin==$opol)
                        {
                          $data=DB::table('studenta')->where('email',$email)->get()->take(5);
                       
                          return view('chat',compact('data'));

                        }else
                        {
                       $opol=$opol-5;

                       if($mubin>=$opol)
                       {
                          $data=DB::table('studenta')->where('email',$email)->get()->take(5);
                          session()->put('number',$mubin);
                          return view('chat',compact('data'));
                       }else
                       {

                         $data=DB::table('studenta')->where('email',$email)->get()->take($opol)->take(5);
                             session()->put('number',$opol);
                            return view('chat',compact('data'));
                           
                       }

                      

                    }


                  }



            
               
            }


            else if($name=="proctor"){


          
                   $mubin=DB::table('proctor')->where('email',$email)->get()->count();
         
                    if($mubin<=5)
                    {
                      $data=DB::table('proctor')->where('email',$email)->get();
                       return view('chat',compact('data'));
               

                    }else
                    {

                      $mubin=$mubin*(-1);
                       $opol=session('number');

                       
                       
                        if($mubin==$opol)
                        {
                        
                          $data=DB::table('proctor')->where('email',$email)->get()->take(5);
                       
                          return view('chat',compact('data'));

                        }else
                        {
                        $opol=$opol-5;
                        
                       if($mubin>=$opol)
                       {
                          $data=DB::table('proctor')->where('email',$email)->get()->take(5);
                          session()->put('number',$mubin);
                          return view('chat',compact('data'));
                       }else
                       {


                         $data=DB::table('proctor')->where('email',$email)->get()->take($opol)->take(5);
                           session()->put('number',$opol);

                            return view('chat',compact('data'));
                          
                       }

                      

                    }
                  }
           }
              
         else{


                  $mubin=DB::table('hcell')->where('email',$email)->get()->count();
                 
                    if($mubin<=5)
                    {
                      $data=DB::table('hcell')->where('email',$email)->get();
                       return view('chat',compact('data'));
               

                    }else
                    {
                       $mubin=$mubin*(-1);
                       $opol=session('number');
                     //  dd($opol);

                        if($mubin==$opol)
                        {
                          $data=DB::table('hcell')->where('email',$email)->get()->take(5);
                       
                          return view('chat',compact('data'));

                        }else
                        {
                         $opol=$opol-5;
                         //dd($opol);
                         
                       if($mubin>=$opol)
                       {

                          $data=DB::table('hcell')->where('email',$email)->get()->take(5);
                          session()->put('number',$mubin);
                          return view('chat',compact('data'));
                       }else
                       {


                         $data=DB::table('hcell')->where('email',$email)->get()->take($opol)->take(5);
                               session()->put('number',$opol);
                            return view('chat',compact('data'));
                            
                       }

                      

                    }
            }


      }


        



         

     
        


  }
    public function nc()
    {


       
                 $name=(session('key'));
                 $email=(session('email'));
                 $opol=session('number');

          
                   if($name=="studentadvisor"){
                   

                    $mubin=DB::table('studenta')->where('email',$email)->get()->count();

                    if($mubin<=5)
                    {
                      $data=DB::table('studenta')->where('email',$email)->get();
                       return view('chat',compact('data'));
               

                    }else
                    {
                      $mubin=$mubin*(-1);
                       $opol=session('number');


                        if(0==$opol)
                        {
                          $data=DB::table('studenta')->where('email',$email)->get()->take(-5);
                       
                          return view('chat',compact('data'));

                        }else
                        {
                       $opol=$opol+5;

                       if(0<=$opol)
                       {
                          $data=DB::table('studenta')->where('email',$email)->get()->take(-5);
                          session()->put('number','-5');
                          return view('chat',compact('data'));
                       }else
                       {

                         $data=DB::table('studenta')->where('email',$email)->get()->take($opol)->take(5);
                             session()->put('number',$opol);
                            return view('chat',compact('data'));
                           
                       }

                      

                    }


                  }



            
               
            }


            else if($name=="proctor"){


          
                   $mubin=DB::table('proctor')->where('email',$email)->get()->count();
         
                    if($mubin<=5)
                    {
                      $data=DB::table('proctor')->where('email',$email)->get();
                       return view('chat',compact('data'));
               

                    }else
                    {

                       $mubin=$mubin*(-1);
                       $opol=session('number');

                      
                       
                        if(0==$opol)
                        {
                        
                          $data=DB::table('proctor')->where('email',$email)->get()->take(-5);
                       
                          return view('chat',compact('data'));

                        }else
                        {
                        $opol=$opol+5;
                        
                       if(0<=$opol)
                       {
                          $data=DB::table('proctor')->where('email',$email)->get()->take(-5);
                          session()->put('number','-5');
                          return view('chat',compact('data'));
                       }else
                       {


                         $data=DB::table('proctor')->where('email',$email)->get()->take($opol)->take(5);
                           session()->put('number',$opol);

                            return view('chat',compact('data'));
                          
                       }

                      

                    }
                  }
           }
              
         else{


                  $mubin=DB::table('hcell')->where('email',$email)->get()->count();
                 
                    if($mubin<=5)
                    {
                      $data=DB::table('hcell')->where('email',$email)->get();
                       return view('chat',compact('data'));
               

                    }else
                    {
                       $mubin=$mubin*(-1);
                       $opol=session('number');
                     //  dd($opol);

                        if(0==$opol)
                        {
                          dd($opol);
                          $data=DB::table('hcell')->where('email',$email)->get()->take(-5);
                       
                          return view('chat',compact('data'));

                        }else
                        {
                         $opol=$opol+5;
                         //dd($opol);
                         
                       if(0<=$opol)
                       {

                          $data=DB::table('hcell')->where('email',$email)->get()->take(-5);
                          session()->put('number','-5');
                          return view('chat',compact('data'));
                       }else
                       {


                         $data=DB::table('hcell')->where('email',$email)->get()->take($opol)->take(5);
                               session()->put('number',$opol);
                            return view('chat',compact('data'));
                            
                       }

                      

                    }
            }


      }


        




     
}


     public function truncate()
     {
         $name=session('key');
        if($name=="studentadvisor")

         {
          DB::table('studenta')->truncate();
           return redirect('output');

         } else if($name=="proctor")  
         {

          DB::table('proctor')->truncate();
           return redirect('output');
         } else
         {
          DB::table('hcell')->truncate();
           return redirect('output');
         }

   


     }




      public function stchat()
      {
        session()->put('x','-5');
         session()->put('y','-5');
          session()->put('z','-5');
        

        $email=session('key');
       
        $sa=DB::table('studenta')->where('email',$email)->get()->take(-5);
        $p=DB::table('proctor')->where('email',$email)->get()->take(-5);
        $h=DB::table('hcell')->where('email',$email)->get()->take(-5);
          

          
        return view('newchat',compact('sa','p','h'));
      }








public function a()
{       
        $email=session('key');
        $sabbir=DB::table('studenta')->where('email',$email)->get()->count();
        $sabbir=$sabbir*(-1);
        $opol=session('x');
         
        if($sabbir>=-5)
        {

          return redirect('stchat');

        }else{

           if($opol==$sabbir)
           {
            $sa=DB::table('studenta')->where('email',$email)->get()->take($opol)->take(5);
            $p=DB::table('proctor')->where('email',$email)->get()->take(-5);
            $h=DB::table('hcell')->where('email',$email)->get()->take(-5);
            
             return view('newchat',compact('sa','p','h'));

           }else
           {

        
          $opol=$opol-5;
        
   
          if($sabbir>=$opol)
          {
            
            $mubin=$sabbir-$opol;
            $mubin=5-$mubin;
            $opol=$sabbir;

            $sa=DB::table('studenta')->where('email',$email)->get()->take($opol)->take($mubin);
            $p=DB::table('proctor')->where('email',$email)->get()->take(-5);
            $h=DB::table('hcell')->where('email',$email)->get()->take(-5);
            session()->put('x',$opol);
             return view('newchat',compact('sa','p','h'));

          }else
          {



            
            $sa=DB::table('studenta')->where('email',$email)->get()->take($opol)->take(5);
            //dd($sa);
            $p=DB::table('proctor')->where('email',$email)->get()->take(-5);
            $h=DB::table('hcell')->where('email',$email)->get()->take(-5);
            session()->put('x',$opol);
            return view('newchat',compact('sa','p','h'));

          }
        }






        }





        
      
}
public function b()
{  

    
        $email=session('key');
        $sabbir=DB::table('studenta')->where('email',$email)->get()->count();
        $sabbir=$sabbir*(-1);
        $opol=session('x');
         
       if($sabbir>=-5)
        {

          return redirect('stchat');

        }else{
        
          $opol=$opol+5;


          if(0<=$opol)
          {
            
          
           
                 return redirect('stchat');

          }else
          {


            //dd($opol);
            $sa=DB::table('studenta')->where('email',$email)->get()->take($opol)->take(5);
            
            $p=DB::table('proctor')->where('email',$email)->get()->take(-5);
            $h=DB::table('hcell')->where('email',$email)->get()->take(-5);
            session()->put('x',$opol);
            return view('newchat',compact('sa','p','h'));

          }
        }
  
}
public function c()
{
        $email=session('key');
        $sabbir=DB::table('proctor')->where('email',$email)->get()->count();
        $sabbir=$sabbir*(-1);
        $opol=session('y');
       
        if($sabbir>=-5)
        {

          return redirect('stchat');

        }else{

          if($opol==$sabbir)
          {
             $sa=DB::table('studenta')->where('email',$email)->get()->take(-5);
            $p=DB::table('proctor')->where('email',$email)->get()->take($opol)->take(5);
            $h=DB::table('hcell')->where('email',$email)->get()->take(-5);
           
             return view('newchat',compact('sa','p','h'));


          }else{
        
          $opol=$opol-5;


          if($sabbir>=$opol)
          {
            
            $mubin=$sabbir-$opol;
            $mubin=5-$mubin;
            $opol=$sabbir;

            $sa=DB::table('studenta')->where('email',$email)->get()->take(-5);
            $p=DB::table('proctor')->where('email',$email)->get()->take($opol)->take($mubin);
            $h=DB::table('hcell')->where('email',$email)->get()->take(-5);
             session()->put('y',$opol);
             return view('newchat',compact('sa','p','h'));

          }else
          {


            
            $sa=DB::table('studenta')->where('email',$email)->get()->take(-5);
          
            $p=DB::table('proctor')->where('email',$email)->get()->take($opol)->take(5);
            $h=DB::table('hcell')->where('email',$email)->get()->take(-5);
            session()->put('y',$opol);
            return view('newchat',compact('sa','p','h'));

          }
        }
    }
  
}
public function d()
{  

        $email=session('key');
        $sabbir=DB::table('proctor')->where('email',$email)->get()->count();
        $sabbir=$sabbir*(-1);
        $opol=session('y');
      
       if($sabbir>=-5)
        {

          return redirect('stchat');

        }else{
        
          $opol=$opol+5;


          if(0<=$opol)
          {
            
          
           
                 return redirect('stchat');

          }else
          {


            
            $sa=DB::table('studenta')->where('email',$email)->get()->take(-5);
            
            $p=DB::table('proctor')->where('email',$email)->get()->take($opol)->take(5);
            $h=DB::table('hcell')->where('email',$email)->get()->take(-5);
            session()->put('y',$opol);
            return view('newchat',compact('sa','p','h'));

          }
        }
  
}
public function e()
{
        $email=session('key');
        $sabbir=DB::table('hcell')->where('email',$email)->get()->count();
        $sabbir=$sabbir*(-1);
        $opol=session('z');
       
        if($sabbir>=-5)
        {

          return redirect('stchat');

        }else{
          if($opol==$sabbir)
          {
              $sa=DB::table('studenta')->where('email',$email)->get()->take(-5);
            $p=DB::table('proctor')->where('email',$email)->get()->take(-5);
            $h=DB::table('hcell')->where('email',$email)->get()->take($opol)->take(5);
          
             return view('newchat',compact('sa','p','h'));

          }else
          {
        
          $opol=$opol-5;


          if($sabbir>=$opol)
          {
            
            $mubin=$sabbir-$opol;
            $mubin=5-$mubin;
            $opol=$sabbir;

            $sa=DB::table('studenta')->where('email',$email)->get()->take(-5);
            $p=DB::table('proctor')->where('email',$email)->get()->take(-5);
            $h=DB::table('hcell')->where('email',$email)->get()->take($opol)->take($mubin);
            session()->put('z',$opol);
             return view('newchat',compact('sa','p','h'));

          }else
          {


            
            $sa=DB::table('studenta')->where('email',$email)->get()->take(-5);
          
            $p=DB::table('proctor')->where('email',$email)->get()->take(-5);
            $h=DB::table('hcell')->where('email',$email)->get()->take($opol)->take(5);
            session()->put('z',$opol);
            return view('newchat',compact('sa','p','h'));

          }
        }
        }
  
  
}
public function f()
{
          $email=session('key');
        $sabbir=DB::table('hcell')->where('email',$email)->get()->count();
        $sabbir=$sabbir*(-1);
        $opol=session('z');
      
       if($sabbir>=-5)
        {

          return redirect('stchat');

        }else{
        
          $opol=$opol+5;


          if(0<=$opol)
          {
            
          
           
                 return redirect('stchat');

          }else
          {


            
            $sa=DB::table('studenta')->where('email',$email)->get()->take(-5);
            
            $p=DB::table('proctor')->where('email',$email)->get()->take(-5);
            $h=DB::table('hcell')->where('email',$email)->get()->take($opol)->take(5);
            session()->put('z',$opol);
            return view('newchat',compact('sa','p','h'));

          }
        }
  
}











      public function rifa(request $request)
      {
           
        
          $message=$request->input('message');
          $email=(session('key'));
          $name="";
         $c=DB::table('studenta')->where('email',session('key'))->get()->count();
          if($c>0)
          {


               $ab=new studenta();
                $ab->name=$name;
                $ab->email=$email;
                $ab->message=$message;
                $ab->save();
              

               return redirect ('stchat');
          }else
          {
            return view('kala');
          }

      
      }






      public function rifat(request $request)
      {

       
          $message=$request->input('message');
          $email=(session('key'));
          $name="";
         $c=DB::table('proctor')->where('email',session('key'))->get()->count();
          if($c>0)
          {


            $ab=new proctor();
                $ab->name=$name;
                $ab->email=$email;
                $ab->message=$message;
                $ab->save();

             

               return redirect ('stchat');
          }else
          {
            return view('kala');
          }


        
      }


      public function rifatt(request $request)
      {

          $message=$request->input('message');
          $email=(session('key'));
          $name="";
         $c=DB::table('hcell')->where('email',session('key'))->get()->count();
          if($c>0)
          {

             $ab=new  hcell();
                $ab->name=$name;
                $ab->email=$email;
                $ab->message=$message;
                $ab->save();
              

               return redirect ('stchat');
          }else
          {
            return view('kala');
          }
          


      }
      public function dr()
      {
        $opol="VERIFIED";

        $data=Company::where('verified',$opol)->get();
        return view('dr',compact('data'));
      }


      public function dre(request $request)
      {
        $muin=($request->h);
        DB::delete('delete from company where email = ?',[$muin]);
        return redirect('dr');


      }


      public function form(request $request)
      {

      
         $email=$request->input('email');
         $password=$request->input('password');
         $phone=$request->input('phone');
         $message=$request->input('message');
          
        $nazmul=Company::where('email',$email)->where('password',$password)->get()->count();
        if($nazmul>0)
        {
                $ab=new ad();
                $ab->email=$email;
                $ab->password=$password;
                $ab->phone=$phone;
                $ab->message=$message;
                $ab->save();


        
          return redirect('/');
        }else
        {
         return view('wrong');
        }


      }

      public function muin()
      {

        $data=ad::all();


        return view('muin',compact('data'));
      }

      public function de()
      {

       
        DB::table('ad')->truncate();
         $data=ad::all(); 
          
        return view('a');
      }
      public function reg(request $request)
      {

        $data=$request->reg;
    
       company::where('registration_num',$data)->delete();

       return view('a');
      }
      public function cs(request $request)
      {

        $phone=$request->input('phone');
        $message=$request->input('message');
        $email=session('key');


         $ab=new studenta();
        
                $ab->email=$email;
                $ab->phone=$phone;
                $ab->message=$message;
                $ab->save();
        
         return redirect('/st');
      }


}





    

