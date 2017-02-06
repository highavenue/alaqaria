                    <div class="srch_frm">
                        <h3>Real Estate Search</h3>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Keyword </label>
                                    <input type="text" class="form-control" id="keyword" required data-validation-required-message="Please enter a keyword." placeholder="Any keyword">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Location </label>
                                    <select name="State" class="form-control" required data-validation-required-message="Please select a state.">
                                        <option value="" selected="selected">Any Location</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls col-md-6 first">
                                    <label>Type </label>
                                    <select name="Type" class="form-control" required data-validation-required-message="Please select a type.">
                                        <option value="" selected="selected">Industrial</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Household</option>
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
                            </div>

                            <div class="control-group form-group">
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
                            </div>

                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>