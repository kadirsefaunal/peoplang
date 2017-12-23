<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php $this->load->view('app/partialOnlineUsers'); ?>
            <br />
            <?php $this->load->view('app/partialVisitors'); ?>
            <br />
            <?php $this->load->view('app/partialOnlineFriends'); ?>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <?php $this->load->view('app/partialPost'); ?>
                    <div class="row">
                        <section class="row-section">
                            <?php $this->load->view('app/partialPosts'); ?>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>