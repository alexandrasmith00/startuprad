									<div class="fh5co-accordion">
										<div class="fh5co-accordion-head">
                                            <div style="padding: 1.5em .5em;" class="row">
                                                <div class="col-md-3 logos">
                                                    <img height="25px" src="<?php echo e($logo); ?>">
                                                </div>
                                                <div class="col-md-9 team">
                                                    <?php echo e($team); ?> | <span class="people"><?php echo e($people); ?></span>
                                                </div>
                                            </div>
										</div>
										<div>
											<p><?php echo e($description); ?>

                                            
                                            <?php if($email != "" || $web != ""): ?>
                                                Learn more
                                           
                                            
                                                <?php if($web !== ""): ?>
                                                    on the web at <a href="http://<?php echo e($web); ?>"><?php echo e($web); ?></a>
                                                    
                                                    <?php if($email != ""): ?>
                                                     or
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                
                                                <?php if($email != ""): ?>
                                                    by reaching out to <a href="mailto:<?php echo e($email); ?>"> <?php echo e($email); ?></a>
                                                <?php endif; ?>
                                                
                                            <?php endif; ?>
                                                
                                            </p>
										</div>	
									</div>