            <?php if($programs->count()): ?>
                <div class="programs-container">
                    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="program-card">
                            <div class="program-header">
                              <!-- <img src="<?php echo e(asset('images/edu-x white.png')); ?>" alt="University Logo" class="program-logo" /> -->

                                 <img src="<?php echo e(asset('/public/storage/' . $value->image)); ?>?v=<?php echo e($value->updated_at->timestamp); ?>"
                                    alt="University Logo" class="program-logo" />
                                <a href="#">
                                    <h3><?php echo e($value->university_name); ?></h3>
                                </a>
                            </div>

                            <div class="program-badges">
                                <span class="badge"><?php echo e($value->success_prediction); ?> Demand</span>
                                <span class="badge">Popular</span>
                            </div>

                            <div class="program-details">
                                <small><?php echo e($value->certificate); ?></small>
                                <a href="#">
                                    <p><?php echo e($value->college_name); ?></p>
                                </a>
                                <hr />
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Course</td>
                                            <td><?php echo e($value->college_course); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Program Level</td>
                                            <td><?php echo e($value->program_level); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Program language</td>
                                            <td><?php echo e($value->language); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td><?php echo e($value->location); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Campus Country</td>
                                            <td><?php echo e($value->campus_country); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Campus city</td>
                                            <td><?php echo e($value->location); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tuition (1st year)</td>
                                            <td> $<?php echo e($value->tuition); ?>CAD</td>
                                        </tr>
                                        <tr>
                                            <td>Application fee</td>
                                            <td>$<?php echo e($value->application_fee); ?>CAD</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td> <?php echo e($value->duration); ?> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="program-footer">
                                <p>Success prediction <button class="success-btn" onclick="openModal()">Details</button>
                                </p>
                                <button class="apply-btn">Create Application</button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <p>No programs found.</p>
            <?php endif; ?>
            </div>

            <!-- Success Prediction Modal -->
            <div id="successModal" class="modal">
                <div class="modal-content">
                    <span class="close-btn" onclick="closeModal()">&times;</span>
                    <h3>Success Prediction by Intake</h3>
                    <p class="note">
                        Estimated based on ApplyBoard's historical data. We make no representations, warranties, or
                        guarantees as to the
                        information's accuracy.
                    </p>

                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-btn" onclick="toggleAccordion(this)">Sep 2025</button>
                            <div class="accordion-panel">
                                <p><strong>Seat Availability:</strong> Very High</p>
                                <p><strong>Turn Around Time:</strong> Very Fast</p>
                                <p><strong>Conversion:</strong> Very High</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-btn" onclick="toggleAccordion(this)">Sep 2026</button>
                            <div class="accordion-panel">
                                <p><strong>Seat Availability:</strong> Very High</p>
                                <p><strong>Turn Around Time:</strong> Very Fast</p>
                                <p><strong>Conversion:</strong> Very High</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-btn" onclick="toggleAccordion(this)">Sep 2027</button>
                            <div class="accordion-panel">
                                <p><strong>Seat Availability:</strong> Very High</p>
                                <p><strong>Turn Around Time:</strong> Slow</p>
                                <p><strong>Conversion:</strong> Very High</p>
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="info-note">
                        <p><strong>Conversion:</strong> Historical ratio of accepted to submitted applications.</p>
                        <p><strong>Turn Around Time:</strong> Expected time to receive a letter of acceptance.</p>
                        <p><strong>Seat Availability:</strong> Predicted likelihood of a seat being available.</p>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <?php echo e($programs->withQueryString()->links()); ?>

                <!-- <?php echo e($programs->appends(request()->input())->links()); ?> -->
            </div>
<?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/partials/programs.blade.php ENDPATH**/ ?>