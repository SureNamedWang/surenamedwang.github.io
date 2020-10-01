<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="bg2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php if($this->input->cookie('login', false)){?>
                            <?php echo $this->input->cookie('nik', false);?>
                            <span class="user-level"><?php echo $this->input->cookie('department', false);?></span>
                            <?php }
                            else{ ?>
                            GUEST
                            <span class="user-level">GUEST</span>
                            <?php } ?>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <?php if($this->input->cookie('login', false)){?>
                            <li>
                                <a href="<?php echo base_url();?>Users/logout">
                                    <span class="link-collapse">Logout</span>
                                </a>
                            </li>
                            
                            <li>
                                <form method="POST" action="<?php echo base_url();?>users/changepassword/">
                                    <div class="form-group">
                                        <label for="cPass">Ganti Password</label>
                                        <div class="form-group show-password">
                                            <i class="flaticon-interface" style="color:black;"></i>
                                        </div>
                                        <input type="password" class="form-control input-pill" name="cPass" id="cPass" placeholder="Input Password Baru">
                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn btn-round btn-danger" name="submit" id="cPass" value="Ganti Password">
                                    </div>
                                </form>
                            </li>

                            <?php }
                            else{ ?>
                            <li>
                                <a href="<?php echo base_url();?>Users/login">
                                    <span class="link-collapse">Login</span>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
            <li class="nav-item">
                    <a href="<?php echo base_url();?>home/">
                        <i class="fas fa-clipboard"></i>
                        <p>Peminjaman</p>
                    </a>
                </li>
                <?php if($this->input->cookie('login', false)){?>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Input Data</h4>
                </li>
                
                <li class="nav-item">
                    <a href="<?php echo base_url();?>linen/">
                        <i class="fas fa-tshirt"></i>
                        <p>Linen</p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->