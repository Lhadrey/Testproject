<!DOCTYPE html>
<html>
<head>
    <title>registration form</title>
   @include("common.css")
</head>
<body>
       <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 col-lg-12 offset-md-1 offset-lg-2">
              <div class="form_container">
                <div class="heading_container">
                  <h2>Registration Form</h2>
                </div>
                <form action="/register_new_user" method="POST">
                    @csrf
                  <div>
                    <input type="text" placeholder="Full_name" name="Full_name"/>
                  </div>
                  <div>
                    <input type="number" placeholder="contact_no " name="Contact_no"/>
                  </div>
                  <div>
    
                    <input type="email" placeholder="email " name="email"/>
                  </div>
                  <div>
                    <label>select role</label>
                <select name='role'>
                    @foreach($response as $i => $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
                    <input type="password" placeholder="password" name='password'/>
                  </div>
                  <div class="d-flex">
                    <button type='submit'>
                        SEND
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- end contact section -->

   
</body>
</html>
