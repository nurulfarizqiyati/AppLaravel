<script>
    $(function() {
        $("#user-form").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                    remote: "{{ route('cek_email') }}"
                }
            },
            messages: {
                remote: "custom remote message"
            },
        });
    })</script>
<div class="alert alert-info">
    <strong>Add user</strong><br/>
    Fill out the fields and click on 'Save' button to add new user to the system. 'Editors' have a limited access to the system back-end. They can only view Reservations menu.
</div>
{{ Form::open(array('route' => 'admin.user.store','method' => 'post','class' => 'form-horizontal row-border','id' => 'user-form')) }}
<div class="form-group">
    <label class="col-md-3 control-label">Roles</label>
    <div class="col-md-3">
        {{ Form::select('group', $groups,'',array('class' => 'form-control')) }}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Email <span class="required">*</span></label>
    <div class="col-md-3">
        <div class="input-group">
            <span class="input-group-addon">@</span>
            {{ Form::text('email','',array('class' => 'form-control required email')) }}
        </div>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Password <span class="required">*</span></label>
    <div class="col-md-3">
        <div class="input-group">
            <span class="input-group-addon"><i class=' icon-lock'></i></span>
            {{ Form::password('password',array('class' => 'form-control required')) }}
        </div>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">First Name <span class="required">*</span></label>
    <div class="col-md-4">
        {{ Form::text('first_name','',array('class' => 'form-control required')) }}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Last Name <span class="required">*</span></label>
    <div class="col-md-4">
        {{ Form::text('last_name','',array('class' => 'form-control required')) }}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Phone <span class="required">*</span></label>
    <div class="col-md-3">
        <div class="input-group">
            <span class="input-group-addon"><i class=' icon-phone'></i></span>
            {{ Form::text('phone','',array('class' => 'form-control required')) }}
        </div>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Status</label>
    <div class="col-md-3">
        {{ Form::select('group', $status,'',array('class' => 'form-control')) }}
    </div>
</div>
<div class="form-actions">
    {{ Form::submit('Save',array('class' => 'btn btn-primary pull-right')) }}
</div>
{{ Form::close() }}