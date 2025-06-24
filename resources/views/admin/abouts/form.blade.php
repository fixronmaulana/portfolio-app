<div class="titlebar">
    <h1>About Me</h1>
    <button class="secondary">
        {{ $formMode === 'edit' ? 'Update Changes' : '' }}
    </button>
</div>
@include('includes.flash_message')
<div class="card-wrapper">
    <div class="wrapper_left">
        <div class="card">
            <label>Full Name</label>
            <input type="text" name="name" value="{{ isset($about->name) ? $about->name : '' }}">
            {!! $errors->first('name','<p class="alert">:message</p>') !!}
            <label>Email</label>
            <input type="email" name="email" value="{{ isset($about->email) ? $about->email : '' }}">
            {!! $errors->first('email','<p class="alert">:message</p>') !!}
            <label>Phone</label>
            <input type="text" name="phone" value="{{ isset($about->phone) ? $about->phone : '' }}">

            <label>Address</label>
            <input type="text" name="address" value="{{ isset($about->address) ? $about->address : '' }}">

            <label>Description</label>
            <textarea cols="10" rows="3" name="description">{{ isset($about->description) ? $about->description : '' }}</textarea>

            <label>Summary</label>
            <textarea cols="10" rows="2" name="summary">{{ isset($about->summary) ? $about->summary : '' }}</textarea>
        </div>
        <div class="card">
            <label>Tagline</label>
            <input type="text" name="tagline" value="{{ isset($about->tagline) ? $about->tagline : '' }}">
        </div>

    </div>
    <div class="wrapper_right">
        <div class="card">
            <img src="{{ isset($about->home_image) ? asset('images/'.$about->home_image) : asset('template/assets/img/avatar.jpg') }}" class="avatar_img" id="homeImage-preview">
            <input accept="image/*" type="file" id="fileimg" name="home_image" onchange="showHomeImageFile(event)">
        </div>
        <div class="card">
            <img src="{{ isset($about->banner_image) ? asset('images/'.$about->banner_image) : asset('template/assets/img/avatar.jpg') }}" class="avatar_img" id="bannerImage-preview">
            <input accept="image/*" type="file" id="fileimg" name="banner_image" onchange="showBannerImageFile(event)">
        </div>
        <div class="card">
            <p>CV</p>
            <input accept="pdf/*" type="file" id="filecv" name="cv"
                value="{{ isset($about->cv) ? $about->cv : '' }}">
        </div>
    </div>
</div>
<script>
    function showHomeImageFile(event)
    {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('homeImage-preview');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    }
    function showBannerImageFile(event)
    {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('bannerImage-preview');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
