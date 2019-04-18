<?php acf_form_head(); ?>
<?php /*
* Template Name: IPI Petition Form
* description: 
Page template to allow for different petitions 
* 
*/

get_header(); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Example Petition Title</title>
    
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<br />

<div id="primary" class="petition-info">
    <div class="row">

        <div class="col-sm-8">
            <header class="grid-head">
                <h1 class="header-title"></h1>
               <?php /* get_the_title(); */ ?> 
                <?php the_field("petition_title"); ?>
                </h1>
                <div class="grid-pic">
                    <?php the_post_thumbnail(); ?>
                    <?php the_field("petition_image"); ?>
                </div>
            </header>



            <div class="grid-desc">
                <div class="description-title">
                    <h2>Why We Care About This Cause: </h2>
                </div>
                <div class=description-body>
                    <?php /* the_content(); */ ?>
                    <?php the_field("petition_description"); ?>
                </div>
            </div>
        </div><!-- /.blog-main -->

        <div class="col-sm-4">
            <div class="grid-side" style="width: 100%">People Who Have Signed!
                <div class="added-names" id="added-names">
                    <p id="side-bar-add"></p>
                    <?php the_field("petition_supporters"); ?>
                </div>

                <ul class="add-list" id="add-to-list"></ul>
            </div>
            <div class="grid-sign" style="width:100%">
                <u>
                    <p>Sign Your Name Below
                </u>:</p>

                <?php acf_form(); ?>

                <div class="sign-name">

                    <form id="name-form" input="text" onsubmit="addName(); return false;">
                        <div class="input-wrapper">
                            <div class="form-group">
                                <label for="first-name">Your First Name</label>
                                <input class="form-control" id="first-name" type="text" placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="last-name">Your Last Name</label>
                                <input class="form-control" id="last-name" type="text" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email-add">Email Address</label>
                                <input type="email" class="form-control" id="last-name" aria-describedby="email-add" placeholder="name@unc.edu" required>
                                <small id="email-desc" class="form-text text-muted">Please enter your UNC email.</small>
                            </div>
                            <div class="form-group">
                                <label for="class-year">Select Class Year</label>
                                <select class="form-control" id="class-year">
                                    <option><?php echo date("Y"); ?></option>
                                    <option><?php echo date("Y") + 1; ?></option>
                                    <option><?php echo date("Y") + 2; ?></option>
                                    <option><?php echo date("Y") + 3; ?></option>
                                    <option><?php echo date("Y") + 4; ?></option>
                                </select>
                            </div>
                            <div class="submit-input">
                                <div class="submit_b">
                                    <button type="submit" class="btn btn-primary" id="submit-name">Submit</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div><!-- /.row -->

</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>