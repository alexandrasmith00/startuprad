									<div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div style="padding: 1.5em .5em;" class="row">
                                                <div class="col-md-3 logos">
                                                    <img height="25px" src="{{ $logo }}">
                                                </div>
                                                <div class="col-md-9 team">
                                                    {{ $team }} | <span class="people">{{ $people }}</span>
                                                </div>
                                            </div>
										</div>
										<div>
											<p>{{ $description }}
                                            
                                            @if ($email != "" || $web != "")
                                                Learn more
                                           
                                            
                                                @if ($web !== "")
                                                    on the web at {{ $web }}
                                                    
                                                    @if ($email != "")
                                                     or
                                                    @endif
                                                @endif
                                                
                                                @if ($email != "")
                                                    by reaching out to <a href="mailto:{{ $email }}"> {{ $email }}</a>
                                                @endif
                                                .
                                            @endif
                                                
                                            </p>
										</div>	
									</div>