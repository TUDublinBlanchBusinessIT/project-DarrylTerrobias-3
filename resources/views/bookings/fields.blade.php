<!-- Member (Customer) Field -->
<div class="form-group col-sm-6">
    <label for="memberid">Customer:</label>
    <select name="memberid" class="form-control">
        @foreach($members as $member)
            <option value="{{$member->id}}">{{$member}}</option>
        @endforeach
    </select>
</div>

<!-- Admin Assignment Field -->
<div class="form-group col-sm-6">
    <label for="assigned_to_admin_id">Assign to Admin:</label>
    <select name="assigned_to_admin_id" class="form-control">
        @foreach($admins as $admin)
            <option value="{{$admin->id}}">{{$admin}}</option>
        @endforeach
    </select>
</div>
