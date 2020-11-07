<!DOCTYPE html>
<html>
<form  method="post" enctype="multipart/form-data" action = "{{route("applicants.update", $applicant->id)}}">
    @csrf
    @method("PUT")
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Applicant Name</label>
            <input type="name" class="form-control"  placeholder="Name" name="name" value="{{old('name', $applicant->name)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Applicant Surname</label>
            <input type="name" class="form-control"  placeholder="Surname" name="surname" value="{{old('surname', $applicant->surname)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Applicant Position</label>
            <input type="name" class="form-control"  placeholder="position" name="position" value="{{old('position', $applicant->position)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Applicant Phone</label>
            <input type="name" class="form-control"  placeholder="phone" name="phone" value="{{old('phone', $applicant->phone)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Applicant Status</label>
            <input type="name" class="form-control"  placeholder="status" name="is_hired" value="{{old('is_hired', $applicant->is_hired)}}">

        </div>
    </div>
    </div>
    <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

</html>
