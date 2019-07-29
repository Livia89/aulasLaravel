<div class="input-field">
    <input type="text" name="nameCourse" value="{{isset($course->nameCourse) ? $course->nameCourse : ''}}">
    <label>Course name</label>
</div>


<div class="input-field">
    <input type="text" name="description" value="{{isset($course->description) ? $course->description : ''}}">
    <label>Description</label>
</div>


<div class="input-field">
    <input type="text" name="price" value="{{isset($course->price) ? $course->price : ''}}">
    <label>Price</label>
</div>

<div class="file-field input-field">
  <div class="btn blue">
    <span>Imagem</span>
<<<<<<< HEAD
    <input type="file" name="image" >
  </div>

  <div class="file-path-wrapper">
      <input class="file-path validate" type="text" value="{{isset($course->image) ? $course->image : ''}}">
=======
    <input type="file" name="image">
  </div>

  <div class="file-path-wrapper">

      <input class="file-path validate" type="text" value='{{isset($course->image) ? asset($course->image) : ''}}'>
>>>>>>> 94486e7f70bae02aa18c199cea50e6913f5717a8
  </div>

  @if(isset($course->image))
  <div class="input-field">
      <img width='150' src="{{asset($course->image)}}">
  </div>
  @endif
</div>

<div class="input-field">
   <p>
      <label>
        <input type="checkbox" value='true' name='publicated'  class="filled-in" {{ (isset($course->publicated) && $course->publicated == "sim") ? "checked" : "" }} />
        <span>Publicated?</span>
      </label>
    </p>
</div>

<br><br>
