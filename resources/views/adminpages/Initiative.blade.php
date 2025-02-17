<!DOCTYPE html>
<html lang="en">
   <head>
      @include('adminpages.css')
      <style>
        .card-header {
            display: flex;
            align-items: center;
        }

        .addinitiative {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;            
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-left: auto;
        }

        .addinitiative:hover {
            background-color: #45a049;  
        }

        .custom-modal.initiative {
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

 .custom-modal.initiativeedit {
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
   <body class="dashboard dashboard_1" style="overflow-y: auto;height:920px">
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
                               
                                <button class="addinitiative">Add</button>
                               
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
                                        @foreach($initiatives as $initiative)
                                        <tr class="user-row" id="initiative-{{ $initiative->id }}">
                                                <td>{{$counter}}</td>
                                                <td id="icon">
                                                     <img height="80" width="80" src="{{ asset('images/' . $initiative->image) }}"/>
                                                </td>

                                                <td id="heading">{{$initiative->heading}}</td>  
                                                <td id="paragraph">{{$initiative->paragraph}}</td> 
                                                <td>
                                                    <a data-initiative-id="{{ $initiative->id }}" class="btn btn-warning edit-initiative-btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a data-initiative-id="{{ $initiative->id }}" class="btn btn-danger delinitiative">
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

        <!-- Add initiative data Modal -->
        <div style="display:none" class="custom-modal initiative" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 style="font-weight: bolder" class="modal-title">Add initiative</h2>
                        <button type="button" class="close closeModal" style="background: transparent; border: none; font-size: 2.5rem; color: #333;">
                            &times;
                        </button>
                    </div>
        
                    <form id="initiativeform">
                        <input type="hidden" id="initiativeforminput_add" value=""/>
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
                            <button id="initiativeadd" type="submit" class="btn btn-primary" style="margin-right: 10px;">Submit</button>
                            <button type="button" class="btn btn-secondary closeModal">Close</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        


         <!-- Add initiative edit Modal -->
         <div style="display:none" class="custom-modal initiativeedit" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 style="font-weight: bolder" class="modal-title">Edit initiative</h2>
                        <button type="button" class="close closeModal" style="background: transparent; border: none; font-size: 2.5rem; color: #333;">
                            &times;
                        </button>
                    </div>
        
                    <form id="initiativeeditform">
                        <input type="hidden" id="initiativeforminput_edit" value=""/>
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
                            <button id="initiativeeditForm" type="submit" class="btn btn-primary" style="margin-right: 10px;">Submit</button>
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
     $('.addinitiative').click(function() {
         $('.custom-modal.initiative').fadeIn();  
    });

     $('.closeModal').click(function() {
        $('.custom-modal.initiative').fadeOut(); 
    });

     $(document).click(function(event) {
        if (!$(event.target).closest('.modal-content').length && !$(event.target).is('.addinitiative')) {
            $('.custom-modal.initiative').fadeOut(); 
        }
    });
});

//to del initiative
$(document).on('click', '.delinitiative', function() {
    const initiativeId = $(this).data('initiative-id');
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
                url: '/delete-initiative',
                type: 'POST',
                data: { initiative_id: initiativeId },  
                dataType: 'json',
                success: function(response) {
                    $('#loader').fadeOut(300);
                    if (response.success) {
                        $('.addinitiative').show();
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

     $('#initiativeform').on('submit', function (e) {
    e.preventDefault();   

    let formData = new FormData(this);
    $('#loader').show();
    $.ajax({
        url: "{{ route('initiative.store') }}",
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
                    $('#initiativeform')[0].reset();
                    $('.custom-modal.initiative').fadeOut();

                    const initiative = response.initiative;
                    const newRow = `
                        <tr data-initiative-id="${initiative.id}">
                            <td>${$('.table tbody tr').length + 1}</td>
                            <td><img height="80" width="80" src="{{ asset('images/') }}/${initiative.image}" /></td>
                            <td>${initiative.heading}</td>
                            <td>${initiative.paragraph}</td>
                            <td>
                                <a id="initiativeedit" data-initiative-id="${initiative.id}" class="btn btn-warning edit-initiative-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <a data-initiative-id="${initiative.id}" class="btn btn-danger delinitiative">
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


// get initiative data
$(document).on('click', '.edit-initiative-btn', function () {
    var initiativeId = $(this).data('initiative-id');
    $('#loader').show();
    $.ajax({
        url: "{{ route('initiative.show', '') }}/" + initiativeId, 
        type: "GET",  
        success: function (response) {
            console.log(response);
            $('#loader').hide();
            if (response.success) {
                $('#initiativeeditform #initiativeforminput_edit').val(response.initiative.id);
                if (response.initiative.image) {
                    $('#initiativeeditform #icon_edit').attr('src', "{{ asset('images') }}/" + response.initiative.image);
                }
                
                $('#initiativeeditform #heading_edit').val(response.initiative.heading);
                $('#initiativeeditform #paragraph_edit').val(response.initiative.paragraph);
                $('.custom-modal.initiativeedit').fadeIn();
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


// Edit initiative 
$('#initiativeeditform').on('submit', function (e) {
    e.preventDefault();

    var formData = new FormData(this); 
    var initiativeId = $('#initiativeforminput_edit').val(); 
    $('#loader').show();
  
    $.ajax({
        url: "{{ route('initiative.update', '') }}/" + initiativeId,  
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
                    $('#initiativeeditform')[0].reset();
                    $('.custom-modal.initiativeedit').fadeOut();

                    const initiative = $(`a[data-initiative-id="${initiativeId}"]`).closest('tr');
                    initiative.find('td:nth-child(2) img').attr('src', '/images/' + response.initiative.image);
                    initiative.find('td:nth-child(3)').text(response.initiative.heading);
                    initiative.find('td:nth-child(4)').text(response.initiative.paragraph);
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
    $('.custom-modal.initiativeedit').fadeOut();
});
        </script>
   </body>
</html>
