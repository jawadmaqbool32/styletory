<div class="card">
    <div class="card-body">
        <div class="doctor-widget">
            <div class="doc-info-left">
                <div class="doctor-img mt-2">
                    <img src="<?php echo "admin/upload/" . $row["image"]; ?>" onerror="this.src='assets/img/avatar.png'" alt="User Image" width="150" height="120" />
                </div>
                <div class="doc-info-cont">
                    <h4 class="doc-name mb-2"><?php echo $row["fullname"]; ?></h4>
                    <!-- <h5><i class="fa fa-calendar-o" aria-hidden="true"><?php echo $row["dob"]; ?></i> </h5> -->
                    <!-- <div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(17)</span>
												</div> -->
                    <div class="clinic-details">
                        <!-- <h5><b><i class="fa fa-envelope" aria-hidden="true"> <?php echo $row["email"]; ?></i> </h5></b>	 -->
                        <p class="doc-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row["address"]; ?></p>
                        <!-- <ul class="clinic-gallery">
														<li>
															<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-01.jpg" alt="Feature">
															</a>
														</li>
														<li>
															<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-02.jpg" alt="Feature">
															</a>
														</li>
														<li>
															<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-03.jpg" alt="Feature">
															</a>
														</li>
														<li>
															<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-04.jpg" alt="Feature">
															</a>
														</li>
													</ul> -->
                    </div>
                    <div class="clinic-services">
                        <span>Dental Fillings</span>
                        <span> Whitneing</span>
                    </div>
                </div>
            </div>
            <div class="doc-info-right">
                <div class="clini-infos">
                    <ul>
                        <?php
                        if (isset($row['distance'])) {
                        ?>
                            <strong class="text-success"> Distance from your current location is <?php echo  $row['distance'] ?> KM</strong>
                        <?php
                        }
                        ?>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $row["email"]; ?></li>
                        <li><i class="fa fa-trophy" aria-hidden="true"></i><?php echo $row["awards"]; ?></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row["dob"]; ?></li>
                        <li><i class="far fa-money-bill-alt"></i><?php echo "Rs" . $row["min_price"]; ?> - <?php echo "Rs" .  $row["max_price"]; ?> <i class="fas fa-info-circle" data-toggle="tooltip" title="" data-original-title="Lorem Ipsum"></i> </li>
                    </ul>
                </div>
                <form action="" method="POST">
                    <div class="clinic-booking">
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                </form>
                <a class="apt-btn" href="saloon-profile.php?id=<?php echo $row["id"]; ?>">View Profile</a>
                <a data-toggle="modal" class="add-booking" href="#add_booking_modal" data-vendor="<?php echo $row["id"]; ?>" class="view-pro-btn" href="book-slot.php?id=<?php echo $row["id"]; ?>">Book Appointment</a>
            </div>

        </div>
    </div>
</div>