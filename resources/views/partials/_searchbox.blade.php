                    <div class="srch_frm">
                        <h3>Real Estate Search</h3>
                        <form name="sentMessage" id="contactForm" novalidate>
                            {{-- <div class="control-group form-group">
                                <div class="controls">
                                    <label>Keyword </label>
                                    <input type="text" class="form-control" id="keyword" required data-validation-required-message="Please enter a keyword." placeholder="Any keyword">
                                    <p class="help-block"></p>
                                </div>
                            </div> --}}
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Location </label>
                                    <select name="State" class="form-control" required data-validation-required-message="Please select a state.">
                                        <option value="" selected="selected">Any Location</option>
                                        <option value="AL">Al Khor</option>
                                        <option value="AK">Maiseed</option>
                                        <option value="AZ">Dukhan</option>
                                        <option value="AR">Zekreet</option>
                                        <option value="CA">Other</option>
                                        <option value="CO">Other</option>
                                        <option value="CT">Other</option>
                                        <option value="DE">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Category </label>
                                    <select name="State" class="form-control" required data-validation-required-message="Please select a state.">
                                        <option value="" selected="selected">Select a Category</option>
                                        <option value="AL">Labour Accomodation</option>
                                        <option value="AK">Dunes Mall & Commercial Shops</option>
                                        <option value="AZ">Bachelors Compound</option>
                                        <option value="AR">Souq</option>
                                        <option value="CA">Other</option>
                                        <option value="CO">Other</option>
                                        <option value="CT">Other</option>
                                        <option value="DE">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Type </label>
                                    <select name="State" class="form-control" required data-validation-required-message="Please select a state.">
                                         <option value="" selected="selected">Industrial</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Household</option>
                                    </select>
                                </div>
                            </div>
                             <div class="control-group form-group">
                                <div class="controls">
                                    <label>Actions </label>
                                    <select name="State" class="form-control" required data-validation-required-message="Please select a state.">
                                         <option value="" selected="selected">Industrial</option>
                                        <option value="" selected="selected">For Rent</option>
                                        <option value="2">For Sale</option>
                                    </select>
                                </div>
                            </div>
                           {{--  <div class="control-group form-group">
                                <div class="controls col-md-6 first">
                                    <label>Actions </label>
                                    <select name="Type" class="form-control" required data-validation-required-message="Please select a type.">
                                        <option value="" selected="selected">Industrial</option>
                                        <option value="" selected="selected">For Rent</option>
                                        <option value="2">For Sale</option>
                                    </select>
                                </div>
                                <div class="controls col-md-6">
                                    <label>Actions </label>
                                    <select name="Actions" class="form-control" required data-validation-required-message="Please select a Actions.">
                                        <option value="" selected="selected">For Rent</option>
                                        <option value="2">For Sale</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div> --}}

                            {{-- <div class="control-group form-group">
                                 <div class="controls col-md-6 first">
                                    <label>Min. Price </label>
                                    <select name="min-price" class="form-control" required data-validation-required-message="Please select a Min. Price.">
                                        <option value="" selected="selected">$50</option>
                                        <option value="2">$00</option>
                                        <option value="3">$200</option>
                                        <option value="3">$300</option>
                                        <option value="3">$400</option>
                                        <option value="3">$500</option>
                                        <option value="3">$700</option>
                                        <option value="3">$800</option>
                                        <option value="3">$900</option>
                                        <option value="3">$000</option>
                                        <option value="3">$500</option>
                                        <option value="3">$2000</option>
                                        <option value="3">$2500</option>
                                    </select>
                                </div> 
                                <div class="controls col-md-6">
                                    <label>Max. Price </label>
                                    <select name="max-price" class="form-control" required data-validation-required-message="Please select a Max. Price.">
                                        <option value="" selected="selected">$200</option>
                                        <option value="2">$300</option>
                                        <option value="3">$400</option>
                                        <option value="3">$500</option>
                                        <option value="3">$600</option>
                                        <option value="3">$700</option>
                                        <option value="3">$800</option>
                                        <option value="3">$900</option>
                                        <option value="3">$1000</option>
                                        <option value="3">$1500</option>
                                        <option value="3">$2000</option>
                                        <option value="3">$2500</option>
                                        <option value="3">$3000</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div> --}}

                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>