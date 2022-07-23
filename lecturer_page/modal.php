
<!-- Confirm Delete Modal-->

            <div id="delete_modal<?php echo $fetch['id']?>" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                
                                   
                                        <div class="modal-header flex-column">
                                            <div class="icon-box">
                                                <i class="material-icons">&#xE5CD;</i>
                                            </div>
                                            <h4 class="modal-title w-100">Are you sure?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                        </div>
                                       
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-di smiss="modal">Cancel</button>
                                            <a href="../php/deleteCSC574.php?_id=<?php echo $fetch['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>  
                                        </div>
  
                 
                            </div>
                    </div>
                </div>                        

                 <!-- End of Confirm Delete Modal-->

                  <!-- Confirm Delete Exercise Modal-->

            <div id="deleteExercise_modal<?php echo $fetch['id']?>" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                
                                   
                                        <div class="modal-header flex-column">
                                            <div class="icon-box">
                                                <i class="material-icons">&#xE5CD;</i>
                                            </div>
                                            <h4 class="modal-title w-100">Are you sure?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                        </div>
                                        
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-di smiss="modal">Cancel</button>
                                            <a href="../php/deleteCSC574_exercise.php?_id=<?php echo $fetch['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>  
                                        </div>
  
                 
                            </div>
                    </div>
                </div>    
                
                <div id="delete662_modal<?php echo $fetch['id']?>" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                
                                   
                                        <div class="modal-header flex-column">
                                            <div class="icon-box">
                                                <i class="material-icons">&#xE5CD;</i>
                                            </div>
                                            <h4 class="modal-title w-100">Are you sure?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                        </div>
                                        
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-di smiss="modal">Cancel</button>
                                            <a href="../php/deleteCSC662.php?_id=<?php echo $fetch['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>  
                                        </div>
  
                 
                            </div>
                    </div>
                </div>

                 <!-- End of Confirm Delete Modal-->

                  <!--Edit Exercise Modal-->

                  <div class="modal fade" id="editExercise_modal<?php echo $fetch['id']?>">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Exercise</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="../php/upload_controller/edit_exercise.php" method="post" enctype="multipart/form-data">

                        <div class="modal-body">
                            
                            <div class="form-group">
                            <input type="text" name="file_id" value="<?php echo $fetch['id']?>" hidden>
                            </div>

                            <div class="form-group">
                                <strong><label class="col-form-label">Select document to upload:</label></strong>
                                <input type="file" class="form-control" name="file" required>
                            </div>
                            <div class="form-group">
                            <strong><label class="col-form-label">Select end date:</label></strong>
                            <input type="date" class="form-control" name="end_date" required>
                            </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit">Proceed</button>
                        </div>
                        </form> 

                    <!-- Edit Exercise Modal-->

                    
                 
             


                