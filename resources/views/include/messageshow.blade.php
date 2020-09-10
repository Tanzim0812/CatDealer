@if(Session('save'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('save')}}</strong>
    </div>
@endif
@if(Session('update'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('update')}}</strong>
    </div>
@endif
@if(Session('delete'))
    <div class="alert alert-danger text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('delete')}}</strong>
    </div>
@endif



