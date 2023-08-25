<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    /**
     * Function to display all footer data
     */
    public function allfooterdata($id) {

        $all_data = DB::table('template')->where('restaurant',$id)->get();
        return view('Admin.footer_template', compact('all_data'));
    }

        /**
     * Function to display all footer data
     */
    public function allhomedata($id) {

        $all_data = DB::table('template')->where('restaurant',$id)->get();
        return view('Admin.home_template', compact('all_data'));
    }
        /**
     * Function to display all footer data
     */
    public function allcontactdata($id) {

        $all_data = DB::table('template')->where('restaurant',$id)->get();
        return view('Admin.contact_template', compact('all_data'));
    }
        /**
     * Function to display all footer data
     */
    public function allaboutdata($id) {

        $all_data = DB::table('template')->where('restaurant',$id)->get();
        return view('Admin.about_template', compact('all_data'));
    }
    /**
     * Function to edit footer
     */

    public function footer_edit_process(Request $req,$id)
    {
        // Validate the form data
        $this->validate($req, [
            'footer_description' => 'nullable|string',
        ]);

        // Prepare data for insertion
        $data = [
            'footer_description' => $req->footer_description,
        ];

        // Update data in 'template' table for 'footer_description' key
        $update = DB::table('template')->where('restaurant', $id)->update($data);

        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Footer Description Updated successfully!');
        } else {
            session()->flash('error', 'Failed to update Footer Description.');
        }

        return redirect()->back();
    }

        /**
     * Functions to edit Contact
     */

     public function contactbigtitle_edit_process(Request $req,$id)
     {
         // Validate the form data
         $this->validate($req, [
            'contact_bigtitle' => 'nullable|string',
         ]);

         // Prepare data for insertion
         $data = [
             'contact_bigtitle' => $req->contact_bigtitle,
         ];

         // Update data in 'template' table for 'footer_description' key
         $update = DB::table('template')->where('restaurant', $id)->update($data);

         // Flash success message and redirect
         if ($update) {
             session()->flash('success', 'Contact Big Title Updated successfully!');
         } else {
             session()->flash('error', 'Failed to update Contact Big Title.');
         }

         return redirect()->back();
     }

     public function contacttitle_edit_process(Request $req, $id)
     {
         // Validate the form data
         $this->validate($req, [
            'contact_title' => 'nullable|string',
         ]);

         // Prepare data for insertion
         $data = [
             'contact_title' => $req->contact_title,
         ];

         // Update data in 'template' table for 'footer_description' key
         $update = DB::table('template')->where('restaurant', $id)->update($data);

         // Flash success message and redirect
         if ($update) {
             session()->flash('success', 'Contact Title Updated successfully!');
         } else {
             session()->flash('error', 'Failed to update Contact title.');
         }

         return redirect()->back();
     }

     public function contactdescription_edit_process(Request $req,$id)
     {
         // Validate the form data
         $this->validate($req, [
            'contact_description' => 'nullable|string',
         ]);

         // Prepare data for insertion
         $data = [
             'contact_description' => $req->contact_description,
         ];

         // Update data in 'template' table for 'footer_description' key
         $update = DB::table('template')->where('restaurant', $id)->update($data);

         // Flash success message and redirect
         if ($update) {
             session()->flash('success', 'Contact Description Updated successfully!');
         } else {
             session()->flash('error', 'Failed to update Contact description.');
         }

         return redirect()->back();
     }

     public function contactaddress_edit_process(Request $req, $id)
     {
         // Validate the form data
         $this->validate($req, [
            'contact_address' => 'nullable|string',
         ]);

         // Prepare data for insertion
         $data = [
             'contact_address' => $req->contact_address,
         ];

         // Update data in 'template' table for 'footer_description' key
         $update = DB::table('template')->where('restaurant', $id)->update($data);

         // Flash success message and redirect
         if ($update) {
             session()->flash('success', 'Contact Address Updated successfully!');
         } else {
             session()->flash('error', 'Failed to update Contact address.');
         }

         return redirect()->back();
     }

     public function contactemail_edit_process(Request $req,$id)
     {
         // Validate the form data
         $this->validate($req, [
            'contact_email' => 'nullable|string',
         ]);

         // Prepare data for insertion
         $data = [
             'contact_email' => $req->contact_email,
         ];

         // Update data in 'template' table for 'footer_description' key
         $update = DB::table('template')->where('restaurant', $id)->update($data);

         // Flash success message and redirect
         if ($update) {
             session()->flash('success', 'Contact Email Updated successfully!');
         } else {
             session()->flash('error', 'Failed to update Contact email.');
         }

         return redirect()->back();
     }

     public function contactphone_edit_process(Request $req,$id)
     {
         // Validate the form data
         $this->validate($req, [
            'contact_phone' => 'nullable|string',
         ]);

         // Prepare data for insertion
         $data = [
             'contact_phone' => $req->contact_phone,
         ];

         // Update data in 'template' table for 'footer_description' key
         $update = DB::table('template')->where('restaurant', $id)->update($data);

         // Flash success message and redirect
         if ($update) {
             session()->flash('success', 'Contact Phone Updated successfully!');
         } else {
             session()->flash('error', 'Failed to update Contact phone.');
         }

         return redirect()->back();
     }

     public function contactmap_edit_process(Request $req, $id)
     {
         // Validate the form data
         $this->validate($req, [
            'contact_map' => 'nullable|string',
         ]);

         // Prepare data for insertion
         $data = [
             'contact_map' => $req->contact_map,
         ];

         // Update data in 'template' table for 'footer_description' key
         $update = DB::table('template')->where('restaurant', $id)->update($data);

         // Flash success message and redirect
         if ($update) {
             session()->flash('success', 'Contact Map Updated successfully!');
         } else {
             session()->flash('error', 'Failed to update Contact map.');
         }

         return redirect()->back();
     }
     /**
      * Functions to edit About Page
      */
      public function aboutbigtitle_edit_process(Request $req, $id)
      {
          // Validate the form data
          $this->validate($req, [
             'about_bigtitle' => 'nullable|string',
          ]);

          // Prepare data for insertion
          $data = [
              'about_bigtitle' => $req->about_bigtitle,
          ];

          // Update data in 'template' table for 'footer_description' key
          $update = DB::table('template')->where('restaurant', $id)->update($data);

          // Flash success message and redirect
          if ($update) {
              session()->flash('success', 'About Big title Updated successfully!');
          } else {
              session()->flash('error', 'Failed to update About big title.');
          }

          return redirect()->back();
      }

      public function abouttitle_edit_process(Request $req,$id)
      {
          // Validate the form data
          $this->validate($req, [
             'about_title' => 'nullable|string',
          ]);

          // Prepare data for insertion
          $data = [
              'about_title' => $req->about_title,
          ];

          // Update data in 'template' table for 'footer_description' key
          $update = DB::table('template')->where('restaurant', $id)->update($data);

          // Flash success message and redirect
          if ($update) {
              session()->flash('success', 'About title Updated successfully!');
          } else {
              session()->flash('error', 'Failed to update About title.');
          }

          return redirect()->back();
      }

      public function aboutdescription_edit_process(Request $req, $id)
      {
          // Validate the form data
          $this->validate($req, [
             'about_description' => 'nullable|string',
          ]);

          // Prepare data for insertion
          $data = [
              'about_description' => $req->about_description,
          ];

          // Update data in 'template' table for 'footer_description' key
          $update = DB::table('template')->where('restaurant', $id)->update($data);

          // Flash success message and redirect
          if ($update) {
              session()->flash('success', 'About description Updated successfully!');
          } else {
              session()->flash('error', 'Failed to update About description.');
          }

          return redirect()->back();
      }

      public function aboutimg_edit_process(Request $req, $id)
      {
          // Validate the form data
          $this->validate($req, [
             'about_img' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
          ]);


        if ($req->hasFile('about_img')) {
            $uploadedfile = $req->file('about_img');
            $new_image = rand() . '.' . $uploadedfile->getClientOriginalExtension();
            $uploadedfile->move(public_path('home/assets/images/'), $new_image);
        }

          // Prepare data for insertion
          if ($req->hasFile('about_img')) {
            $data['about_img'] = $new_image;
        }

          // Update data in 'template' table for 'footer_description' key
          $update = DB::table('template')->where('restaurant', $id)->update($data);

          // Flash success message and redirect
          if ($update) {
              session()->flash('success', 'About image Updated successfully!');
          } else {
              session()->flash('error', 'Failed to update About image.');
          }

          return redirect()->back();
      }

      public function aboutvideo_edit_process(Request $req,$id)
      {
          // Validate the form data
          $this->validate($req, [
             'about_video' => 'nullable|string',
          ]);

          // Prepare data for insertion
          $data = [
              'about_video' => $req->about_video,
          ];

          // Update data in 'template' table for 'footer_description' key
          $update = DB::table('template')->where('restaurant', $id)->update($data);

          // Flash success message and redirect
          if ($update) {
              session()->flash('success', 'About video Updated successfully!');
          } else {
              session()->flash('error', 'Failed to update About video.');
          }

          return redirect()->back();
      }

    /**
     * Functions to edit Home
     */
    public function hometitle_edit_process(Request $req,$id)
    {
        // Validate the form data
        $this->validate($req, [
           'home_title' => 'nullable|string',
        ]);

        // Prepare data for insertion
        $data = [
            'home_title' => $req->home_title,
        ];

        // Update data in 'template' table for 'footer_description' key
        $update = DB::table('template')->where('restaurant', $id)->update($data);

        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Home Title Updated successfully!');
        } else {
            session()->flash('error', 'Failed to update Home title.');
        }

        return redirect()->back();
    }

    public function homedescription_edit_process(Request $req, $id)
    {
        // Validate the form data
        $this->validate($req, [
           'home_description' => 'nullable|string',
        ]);

        // Prepare data for insertion
        $data = [
            'home_description' => $req->home_description,
        ];

        // Update data in 'template' table for 'footer_description' key
        $update = DB::table('template')->where('restaurant', $id)->update($data);

        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Home description Updated successfully!');
        } else {
            session()->flash('error', 'Failed to update Home description.');
        }

        return redirect()->back();
    }

    public function homestorytitle_edit_process(Request $req,$id)
    {
        // Validate the form data
        $this->validate($req, [
           'home_story_title' => 'nullable|string',
        ]);

        // Prepare data for insertion
        $data = [
            'home_story_title' => $req->home_story_title,
        ];

        // Update data in 'template' table for 'footer_description' key
        $update = DB::table('template')->where('restaurant', $id)->update($data);

        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Story title Updated successfully!');
        } else {
            session()->flash('error', 'Failed to update Story title.');
        }

        return redirect()->back();
    }

    public function homestorydescription_edit_process(Request $req,$id)
    {
        // Validate the form data
        $this->validate($req, [
           'home_story_description' => 'nullable|string',
        ]);

        // Prepare data for insertion
        $data = [
            'home_story_description' => $req->home_story_description,
        ];

        // Update data in 'template' table for 'footer_description' key
        $update = DB::table('template')->where('restaurant', $id)->update($data);

        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Story description Updated successfully!');
        } else {
            session()->flash('error', 'Failed to update Story description.');
        }

        return redirect()->back();
    }

    public function homestoryvideo_edit_process(Request $req, $id)
    {
        // Validate the form data
        $this->validate($req, [
           'home_story_video' => 'nullable|string',
        ]);

        // Prepare data for insertion
        $data = [
            'home_story_video' => $req->home_story_video,
        ];

        // Update data in 'template' table for 'footer_description' key
        $update = DB::table('template')->where('restaurant', $id)->update($data);

        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Story video Updated successfully!');
        } else {
            session()->flash('error', 'Failed to update Story video.');
        }

        return redirect()->back();
    }


}
