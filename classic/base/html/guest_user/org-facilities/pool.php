    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div data-plugin="matchHeight" data-by-row="true">
          <!-- Panel Table Add Row -->
          <div class="panel">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-15">
                    <h2>Amphitheatre</h2>
                    <p>October 2019</p>
                      <!-- Example Optional Sizes -->
                          <div class="example-buttons">
                            <button type="button" class="btn btn-primary" data-target=".example-modal-lg" data-toggle="modal">Add Event</button>
                          </div>

                          <!-- Modal -->
                          <div class="modal fade example-modal-lg" aria-hidden="true" aria-labelledby="exampleOptionalLarge"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleOptionalLarge">Event Reservation Form</h4>
                                </div>
                                
                                <div class="modal-body">
                                        <!-- Example Basic Form (Form grid) -->
                                        <div class="example-wrap">
                                          <div class="example">
                                            <form autocomplete="off">
                                              <div class="row">
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicFirstName">First Name</label>
                                                  <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                                                     autocomplete="off" />
                                                </div>
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicLastName">Last Name</label>
                                                  <input type="text" class="form-control" id="inputBasicLastName" name="inputLastName"
                                                     autocomplete="off" />
                                                </div>
                                                  <div class="form-group col-sm-4">
                                                    <label class="form-control-label" for="inputBasicNoOfParticipants">Mobile Number</label>
                                                    <input type="text" class="form-control" id="inputBasicNoOfParticipants" name="inputNoOfParticipants"
                                                       autocomplete="off" />
                                                  </div>
                                              </div>
                                              <div class="row">
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicOrganization">Organization</label>
                                                  <input type="text" class="form-control" id="inputBasicOrganization" name="inputOrganization"
                                                   autocomplete="off" />
                                                </div>
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicPosition">Position</label>
                                                  <input type="text" class="form-control" id="inputBasicPosition" name="inputPosition"
                                                     autocomplete="off" />
                                                </div>
                                                <div class="form-group col-sm-4">
                                                  <label class="form-control-label" for="inputBasicAdviser">Adviser</label>
                                                  <input type="text" class="form-control" id="inputBasicAdviser" name="inputAdviser"
                                                     autocomplete="off" />
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="form-group col-md-6">
                                                  <label class="form-control-label" for="inputBasicEventName">Event Name</label>
                                                  <input type="text" class="form-control" id="inputBasicEventName" name="inputEventName"
                                                     autocomplete="off" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label" for="inputBasicNoOfParticipants">No. of Participants</label>
                                                    <input type="text" class="form-control" id="inputBasicNoOfParticipants" name="inputNoOfParticipants"
                                                       autocomplete="off" />
                                                </div>
                                              </div>
                                              <div class="example-wrap">
                                                <div class="example datepair-wrap" data-plugin="datepair">
                                                  <div class="input-daterange-wrap">
                                                    <label class="form-control-label" for="inputBasicDateAndTime">Date and Time</label>
                                                    <div class="input-daterange">
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                          <i class="icon wb-calendar" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control datepair-date datepair-start" data-plugin="datepicker">
                                                      </div>
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                          <i class="icon wb-time" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control datepair-time datepair-start" data-plugin="timepicker"
                                                        />
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="input-daterange-to"></div>
                                                  <div class="input-daterange-wrap">
                                                    <div class="input-daterange">
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                          <i class="icon wb-calendar" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control datepair-date datepair-end" name="end" data-plugin="datepicker">
                                                      </div>
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                          <i class="icon wb-time" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control datepair-time datepair-end" data-plugin="timepicker"
                                                        />
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                        <!-- End Example Basic Form (Form grid) -->
                                        <h5>Equipment/s to be used:</h5>

                                              <div class="row">
                                                <div class="form-group col-md-6">
                                                  <label class="gu_container">Bench(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Chairs(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Platform(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Table(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Triboard(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Divider(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                </div>

                                                <div class="form-group col-md-6">
                                                  <label class="gu_container">Microphone(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Mic Stand(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Karaoke
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Projector(s)
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">Sound System
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                  <label class="gu_container">TV/DVD
                                                    <input type="checkbox">
                                                    <span class="gu_checkmark"></span>
                                                  </label>
                                                </div>
                                              </div>
                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Save Changes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- End Modal -->
                          <!-- End Example Optional Sizes -->
                        </div>
                      </div>
                    </div>
              
                    <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Event Name</th>
                          <th>Date Start</th>
                          <th>Date End</th>
                          <th>Time Start</th>
                          <th>Time End</th>
                          <th>Organization</th>
                          <th>Position</th>
                          <th>No. of Participants</th>
                        </tr>
                      </thead>

                      <tbody>
                        <!--
                        <tr class="gradeA">
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr class="gradeA">
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      -->
                      <?php

                        $sql = "SELECT * FROM reservation";
                        $result = $conn -> query($sql);

                        if($result -> num_rows > 0){
                          while ($row = $result -> fetch_assoc()) {
                          echo "<tr>
                            <td>" . $row["date"] . "</td>
                            <td>" . $row["eventName"] . "</td>
                            <td>" . $row["dateStart"] . "</td>
                            <td>" . $row["dateEnd"] . "</td>
                            <td>" . $row["timeStart"] . "</td>
                            <td>" . $row["timeEnd"] . "</td>
                            <td>" . $row["Organization"] . "</td>
                            <td>" . $row["Position"] . "</td>
                            <td>" . $row["noParticipant"] . "</td>

                          </tr>";
                        }
                      echo "</table>";


                      }else{
                        echo "0 result";
                    }
                    $conn-> close();
                    ?>

                      </tbody>
                      
                    </table>
                  </div>
                </div>
                <!-- End Panel Table Add Row -->
          </div>
      </div>
    </div>
    <!-- End Page -->