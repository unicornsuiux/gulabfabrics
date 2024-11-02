<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
<table class="table table-striped table-bordered" id="contactforms-table" width="100%">
    <thead>
     <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Subject</th>
        <th>Message</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($contactforms as $contactform)
        <tr>
            <td>{!! $contactform->name !!}</td>
            <td>{!! $contactform->email !!}</td>
            <td>{!! $contactform->phone !!}</td>
            <td>{!! $contactform->subject !!}</td>
            <td>{!! $contactform->message !!}</td>
            <td>
                 <a href="{{ route('admin.contactforms.show', collect($contactform)->first() ) }}">
                     <i class="fas fa-eye text-success mr-2" title="view contactform"></i>
                 </a>
                 <a href="{{ route('admin.contactforms.edit', collect($contactform)->first() ) }}">
                     <i class="fas fa-edit text-primary  mr-2" title="edit contactform"></i>
                 </a>
                 <a href="{{ route('admin.contactforms.confirm-delete', collect($contactform)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.contactforms.delete', collect($contactform)->first() ) }}">
                     <i class="fas fa-trash-alt text-danger"  title="delete contactform"></i>

                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@section('footer_scripts')

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                                <h4 class="modal-title" id="deleteLabel">Delete Item</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this Item? This operation is irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                            </div>
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}">
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>

    <script>
        $('#contactforms-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#contactforms-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#contactforms-table').on( 'length.dt', function ( e, settings, len ) {
                     setTimeout(function(){
                            $('.livicon').updateLivicon();
                     },500);
                  } );

                  $('#delete_confirm').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget)
                       var $recipient = button.data('id');
                      var modal = $(this);
                      modal.find('.modal-footer a').prop("href",$recipient);
                  })

       </script>

@stop
