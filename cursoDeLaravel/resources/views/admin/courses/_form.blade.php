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

<div class="input-field">
  <div class="btn btn-red">
    <span>Imagem</span>
    <input type="file" name="image">
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
  </div>
</div>

@if(isset($course->image))
<div class="input-field">
    <img width='150' src="{{asset($course->image)}}">
</div>
@endif
  <br><br>
<div class="input-field">
   <p>
      <label>
        <input type="checkbox" class="filled-in" {{ isset($course->publicated) && $course-publicated == 'sim' ? 'checked' : "" }} value='true' />
        <span>Publicated?</span>
      </label>
    </p>

</div>
