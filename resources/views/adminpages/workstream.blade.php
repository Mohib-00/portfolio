<!DOCTYPE html>
<html lang="en">
   <head>
      @include('adminpages.css')
      <style>
        .card-header {
            display: flex;
            align-items: center;
        }

        .addworkstream {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;            
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-left: auto;
        }

        .addworkstream:hover {
            background-color: #45a049;  
        }

        .custom-modal.workstream {
     position: fixed;
    z-index: 1050;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
     
 }

 .custom-modal.workstreamedit {
     position: fixed;
    z-index: 1050;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}


        .modal-dialog {
            max-width: 800px;
            animation: slideDown 0.5s ease;
        }

      
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes slideDown {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 100%;
            height: auto;
            text-align: center;
        }
    </style>
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            @include('adminpages.sidebar')
           
        
            <div id="content">
               @include('adminpages.navbar')
            
               <div class="midde_cont">
                <div class="container-fluid">
                    <div class="row column_title">
                       <div class="col-md-12">
                          <div class="page_title">
                             <h2>Add Data</h2>
                          </div>
                       </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                      
                       <div class="col-md-12">
                          <div class="white_shd full margin_bottom_30">
                            <div class="full graph_head">
                                <div class="search-container" style="display: inline-block; float: right; margin-top: 10px;">
                                   <input type="text" class="form-control search-input" placeholder="Search...">
                                </div>
                                <div class="heading1 margin_0">
                               
                                <button class="addworkstream">Add</button>
                               
                                </div>
                           </div>
                             <div class="table_section padding_infor_info">
                                <div class="table-responsive-sm">
                                   <table class="table">
                                      <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Paragraph</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        @php $counter = 1; @endphp
                                        @foreach($workstreams as $workstream)
                                        <tr class="user-row" id="workstream-{{ $workstream->id }}">
                                                <td>{{$counter}}</td>
                                                <td id="icon">
                                                     <img height="80" width="80" src="{{ asset('images/' . $workstream->image) }}"/>
                                                </td>

                                                <td id="heading">{{$workstream->heading}}</td>  
                                                <td id="paragraph">{{$workstream->paragraph}}</td> 
                                                <td>
                                                    <a data-workstream-id="{{ $workstream->id }}" class="btn btn-warning edit-workstream-btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a data-workstream-id="{{ $workstream->id }}" class="btn btn-danger delworkstream">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                        </svg>                                                        
                                                    </a>
                                                </td>
                                                 
                                            </tr>
                                            @php $counter++; @endphp
                                        @endforeach
                                    </tbody>
                                   </table>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                </div>

                 
 <div class="container-fluid" style="margin-top:25%">
   <div class="footer">
      <p>Copyright © 2024 Designed by Logix. All rights reserved.<br><br>
         Distributed By: <a>Logix</a>
      </p>
   </div>
</div>
                  
               </div>
             
            </div>
         </div>
      </div>

        <!-- Add workstream data Modal -->
        <div style="display:none" class="custom-modal workstream" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 style="font-weight: bolder" class="modal-title">Add Workstream</h2>
                        <button type="button" class="close closeModal" style="background: transparent; border: none; font-size: 2.5rem; color: #333;">
                            &times;
                        </button>
                    </div>
        
                    <form id="workstreamform">
                        <input type="hidden" id="workstreamforminput_add" value=""/>
                        <div class="row mt-5">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="icon_add">Image</label>
                                    <input type="file" id="icon_add" name="image" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="heading_add">Heading</label>
                                    <input type="text" id="heading_add" name="heading" class="form-control">
                                </div>
                            </div>
                           
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="paragraph_add">Paragraph</label>
                                    <input type="text" id="paragraph_add" name="paragraph" class="form-control">
                                </div>
                            </div>
                           
                        </div>
                        <div class="modal-footer mt-5" style="justify-content: flex-end; display: flex;">
                            <button id="workstreamadd" type="submit" class="btn btn-primary" style="margin-right: 10px;">Submit</button>
                            <button type="button" class="btn btn-secondary closeModal">Close</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        


         <!-- Add workstream edit Modal -->
         <div style="display:none" class="custom-modal workstreamedit" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 style="font-weight: bolder" class="modal-title">Edit Workstream</h2>
                        <button type="button" class="close closeModal" style="background: transparent; border: none; font-size: 2.5rem; color: #333;">
                            &times;
                        </button>
                    </div>
        
                    <form id="workstreameditform">
                        <input type="hidden" id="workstreamforminput_edit" value=""/>
                        <div class="row mt-5">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="icon_edit">Image</label>
                                    <input type="file" id="icon_edit" name="image" class="form-control">
                                </div>
                            </div>
                           
                           
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="heading_edit">Heading</label>
                                    <input type="text" id="heading_edit" name="heading" class="form-control">
                                </div>
                            </div>
                           
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="paragraph_edit">Paragraph</label>
                                    <input type="text" id="paragraph_edit" name="paragraph" class="form-control">
                                </div>
                            </div>
                          
                        </div>
                        <div class="modal-footer mt-5" style="justify-content: flex-end; display: flex;">
                            <button id="workstreameditForm" type="submit" class="btn btn-primary" style="margin-right: 10px;">Submit</button>
                            <button type="button" class="btn btn-secondary closeModal">Close</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

        <div id="loader" style="display: none">
            <div class="circle one"></div>
            <div class="circle two"></div>
            <div class="circle three"></div>
          </div>


       @include('adminpages.js')
       @include('ajax')
       <script>
     $(document).ready(function () {
    

        $(document).ready(function() {
     $('.addworkstream').click(function() {
         $('.custom-modal.workstream').fadeIn();  
    });

     $('.closeModal').click(function() {
        $('.custom-modal.workstream').fadeOut(); 
    });

     $(document).click(function(event) {
        if (!$(event.target).closest('.modal-content').length && !$(event.target).is('.addworkstream')) {
            $('.custom-modal.workstream').fadeOut(); 
        }
    });
});

//to del workstream
$(document).on('click', '.delworkstream', function() {
    const workstreamId = $(this).data('workstream-id');
    const csrfToken = $('meta[name="csrf-token"]').attr('content');
    const row = $(this).closest('tr');  

    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to delete this?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete!'
    }).then((result) => {
        if (result.isConfirmed) {
            $('#loader').fadeIn(300);
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': csrfToken }
            });

            $.ajax({
                url: '/delete-workstream',
                type: 'POST',
                data: { workstream_id: workstreamId },  
                dataType: 'json',
                success: function(response) {
                    $('#loader').fadeOut(300);
                    if (response.success) {
                        $('.addworkstream').show();
                        row.remove(); 
                        Swal.fire(
                            'Deleted!',
                            response.message,
                            'success'
                        );
                    } else {
                        Swal.fire(
                            'Error',
                            response.message,
                            'error'
                        );
                    }
                },
                error: function(xhr) {
                    $('#loader').fadeOut(300);
                    console.error(xhr);
                    Swal.fire(
                        'Error',
                        'An error occurred while deleting this.',
                        'error'
                    );
                }
            });
        }
    });
});

     $('#workstreamform').on('submit', function (e) {
    e.preventDefault();   

    let formData = new FormData(this);
    $('#loader').show();
    $.ajax({
        url: "{{ route('workstream.store') }}",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            $('#loader').hide();
            if (response.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Added!',
                    text: response.message || 'Added successfully.',
                    confirmButtonText: 'Ok'
                }).then(() => {
                    $('#workstreamform')[0].reset();
                    $('.custom-modal.workstream').fadeOut();

                    const workstream = response.workstream;
                    const newRow = `
                        <tr data-workstream-id="${workstream.id}">
                            <td>${$('.table tbody tr').length + 1}</td>
                            <td><img height="80" width="80" src="{{ asset('images/') }}/${workstream.image}" /></td>
                            <td>${workstream.heading}</td>
                            <td>${workstream.paragraph}</td>
                            <td>
                                <a id="workstreamedit" data-workstream-id="${workstream.id}" class="btn btn-warning edit-workstream-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <a data-workstream-id="${workstream.id}" class="btn btn-danger delworkstream">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    `;

                    $('table tbody').append(newRow);
                 });
            }
        },
        error: function (xhr) {
            $('#loader').hide();
            let errors = xhr.responseJSON.errors;
            if (errors) {
                let errorMessages = Object.values(errors)
                    .map(err => err.join('\n'))
                    .join('\n');
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: errorMessages,
                    confirmButtonText: 'Ok'
                });
            }
        }
    });
});


// get workstream data
$(document).on('click', '.edit-workstream-btn', function () {
    var workstreamId = $(this).data('workstream-id');
    $('#loader').show();
    $.ajax({
        url: "{{ route('workstream.show', '') }}/" + workstreamId, 
        type: "GET",  
        success: function (response) {
            console.log(response);
            $('#loader').hide();
            if (response.success) {
                $('#workstreameditform #workstreamforminput_edit').val(response.workstream.id);
                if (response.workstream.image) {
                    $('#workstreameditform #icon_edit').attr('src', "{{ asset('images') }}/" + response.workstream.image);
                }
                
                $('#workstreameditform #heading_edit').val(response.workstream.heading);
                $('#workstreameditform #paragraph_edit').val(response.workstream.paragraph);
                $('.custom-modal.workstreamedit').fadeIn();
            }
        },
        error: function (xhr) {
            $('#loader').hide();
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Failed to fetch details.',
                confirmButtonText: 'Ok'
            });
        }
    });
});


// Edit workstream 
$('#workstreameditform').on('submit', function (e) {
    e.preventDefault();

    var formData = new FormData(this); 
    var workstreamId = $('#workstreamforminput_edit').val(); 
    $('#loader').show();
  
    $.ajax({
        url: "{{ route('workstream.update', '') }}/" + workstreamId,  
        type: "POST",  
        data: formData,
        contentType: false, 
        processData: false, 
        success: function (response) {
            $('#loader').hide();
            if (response.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Updated!',
                    text: response.message || 'Updated successfully.',
                    confirmButtonText: 'Ok'
                }).then(() => {
                    $('#workstreameditform')[0].reset();
                    $('.custom-modal.workstreamedit').fadeOut();

                    const workstream = $(`a[data-workstream-id="${workstreamId}"]`).closest('tr');
                    workstream.find('td:nth-child(2) img').attr('src', '/images/' + response.workstream.image);
                    workstream.find('td:nth-child(3)').text(response.workstream.heading);
                    workstream.find('td:nth-child(4)').text(response.workstream.paragraph);
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: response.message || 'An error occurred.',
                    confirmButtonText: 'Ok'
                });
            }
        },
        error: function (xhr) {
            $('#loader').hide();
            let errors = xhr.responseJSON.errors;
            if (errors) {
                let errorMessages = Object.values(errors)
                    .map(err => err.join('\n'))
                    .join('\n');
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: errorMessages,
                    confirmButtonText: 'Ok'
                });
            }
        }
    });
});



});

 $('.closeModal').on('click', function () {
    $('.custom-modal.workstreamedit').fadeOut();
});
        </script>
   </body>
</html>
