<?php
<?php
$hidden_items = array();
//$title = 'Add new Quotations';
//$this->headTitle($title);
//?>


<div class="container-fluid">
    <div class="row">
        //<?php echo $this->partial('merchandising/elements/message.phtml', array('flashMessages' => $this->flashMessages, 'error' => $this->error)); ?>
        <section class="panel">
            <div class="panel-heading">
                //<?php echo $this->escapeHtml($title); ?>
            </div>

            //<?php
            //            $form = $this->form;
            //            if ($action == 'edit') {
            //                $form->setAttribute('action', $this->url('quotations/edit', array('id' => $this->id)));
            //            } else {
            //                $form->setAttribute('action', $this->url('quotations/add'));
            //            }
            //
            //            $form->prepare();
            //            echo $this->form()->openTag($form);
            //            $allname = array();
            //            foreach ($form as $element) :
            //                $name = $element->getAttribute('id');
            //                $allname[] = $name;
            //                $$name = $element;
            //            endforeach;
            ////            echo "<pre>";
            ////            print_r($allname);
            ////            echo "</pre>";
            ////            die();
            //            echo $this->formElement($id);
            //            ?>

            //<?php
            //            // CSRF
            //            if ($this->formElementErrors($csrf)) {
            //                $class = '';
            //                $class = $csrf->getAttribute('class');
            //                $class = $class . ' ErrorField';
            //                $csrf->setAttribute('class', $class);
            //            }
            //            ?>

            <header class="panel-heading tab-bg-dark-navy-blue">
                <ul class="nav nav-tabs nav-justified" id="quotationTab">
                    <li class="active"><a href="#basic" data-toggle="tab">Basic Information</a></li>
                    <li><a href="#material" data-toggle="tab">Material Cost</a></li>
                    <li><a href="#production" data-toggle="tab">Production Cost</a></li>
                    <li><a href="#others" data-toggle="tab">Others Cost</a></li>
                </ul>
            </header>

            <div class="panel-body">
                <div class=" //<?php if ($this->formElementErrors($csrf)) echo "error"; ?>">
                    //<?php
                    //                    echo $this->formElement($csrf);
                    //                    if ($this->formElementErrors($csrf)):
                    //                        ?>
                    <span class="ValidationErrors">//<?php echo $this->formElementErrors($csrf); ?></span>
                    //<?php
                    //                    endif;
                    //                    ?>
                </div>


                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="basic">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <?php
                                                                // buyer_id
                                                                if ($this->formElementErrors($buyer_id)) {
                                                                    $class = '';
                                                                    $class = $buyer_id->getAttribute('class');
                                                                    $class = $class . ' ErrorField';
                                                                    $buyer_id->setAttribute('class', $class);
                                                                }
                                                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($buyer_id)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $buyer_id->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($buyer_id);
                                        //                                        if ($this->formElementErrors($buyer_id)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($buyer_id); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // department_id
                                //                                if ($this->formElementErrors($department_id)) {
                                //                                    $class = '';
                                //                                    $class = $department_id->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $department_id->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($department_id)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $department_id->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($department_id);
                                        //                                        if ($this->formElementErrors($department_id)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($department_id); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // quote_type
                                //                                if ($this->formElementErrors($quote_type)) {
                                //                                    $class = '';
                                //                                    $class = $quote_type->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $quote_type->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($quote_type)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $quote_type->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($quote_type);
                                        //                                        if ($this->formElementErrors($quote_type)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($quote_type); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // quote_date
                                //                                if ($this->formElementErrors($quote_date)) {
                                //                                    $class = '';
                                //                                    $class = $quote_date->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $quote_date->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($quote_date)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $quote_date->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($quote_date);
                                        //                                        if ($this->formElementErrors($quote_date)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($quote_date); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // order_qty
                                //                                if ($this->formElementErrors($order_qty)) {
                                //                                    $class = '';
                                //                                    $class = $order_qty->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $order_qty->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($order_qty)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $order_qty->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($order_qty);
                                        //                                        if ($this->formElementErrors($order_qty)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($order_qty); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // order_dz
                                //                                if ($this->formElementErrors($order_dz)) {
                                //                                    $class = '';
                                //                                    $class = $order_dz->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $order_dz->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($order_dz)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $order_dz->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($order_dz);
                                        //                                        if ($this->formElementErrors($order_dz)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($order_dz); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // style_name
                                //                                if ($this->formElementErrors($style_name)) {
                                //                                    $class = '';
                                //                                    $class = $style_name->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $style_name->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($style_name)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $style_name->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($style_name);
                                        //                                        if ($this->formElementErrors($style_name)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($style_name); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // gauge
                                //                                if ($this->formElementErrors($gauge)) {
                                //                                    $class = '';
                                //                                    $class = $gauge->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $gauge->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($gauge)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $gauge->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($gauge);
                                        //                                        if ($this->formElementErrors($gauge)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($gauge); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!---------------------------------------------->


                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // style_image
                                //                                if ($this->formElementErrors($style_image)) {
                                //                                    $class = '';
                                //                                    $class = $style_image->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $style_image->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group  //<?php if ($this->formElementErrors($style_image)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $style_image->getLabel(); ?></label>
                                    <div class="col-sm-4 fileUpload">
                                        <img id="uploadPreview" //<?php if (!empty($style_image->getValue())): echo "src=" . $this->basePath("/images/upload/quotation/") . $this->escapeHtml($style_image->getValue());
                                        //                                endif; ?> class="img-thumbnail"/>
                                        //<?php
                                        //                                        echo $this->formElement($style_image);
                                        //                                        if ($this->formElementErrors($style_image)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($style_image); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>


                                </div>


                            </div>
                            <!------------------------------------------------>
                            <!--                            <span class="btn btn-default btn-file">
                                                            <img src="" alt="" width="100px" height="100px"/> <input type="file">
                                                        </span>-->
                        </div>
                    </div>

                    <div class="tab-pane" id="material">

                        <label>Yarn Information <button class="btn btn-success btn-xs addBlock" data-type="yarnDetails">+ Add Yarn</button></label>
                        <div id="yarnDetailsDiv">
                            <table class="table table-bordered" id="yarnDetailsTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Percent</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="yarnDiv">
                                //<?php
                                //                                    if (!empty($yarn_details)) {
                                //                                        foreach ($yarn_details as $key => $row)
                                //                                        {
                                //                                            echo $this->partial('merchandising/quotations/partial/yarn_details.phtml', array('index' => $key, 'data' => $row));
                                //                                        }
                                //                                    }
                                //                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // composition_name
                                //                                if ($this->formElementErrors($composition_name)) {
                                //                                    $class = '';
                                //                                    $class = $composition_name->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $composition_name->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($composition_name)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $composition_name->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($composition_name);
                                        //                                        if ($this->formElementErrors($composition_name)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($composition_name); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_weight_lbs
                                //                                if ($this->formElementErrors($mc_weight_lbs)) {
                                //                                    $class = '';
                                //                                    $class = $mc_weight_lbs->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_weight_lbs->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_weight_lbs)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_weight_lbs->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_weight_lbs);
                                        //                                        if ($this->formElementErrors($mc_weight_lbs)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_weight_lbs); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_yarn_price_actual
                                //                                if ($this->formElementErrors($mc_yarn_price_actual)) {
                                //                                    $class = '';
                                //                                    $class = $mc_yarn_price_actual->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_yarn_price_actual->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_yarn_price_actual)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_yarn_price_actual->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_yarn_price_actual);
                                        //                                        if ($this->formElementErrors($mc_yarn_price_actual)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_yarn_price_actual); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_yarn_price_quote
                                //                                if ($this->formElementErrors($mc_yarn_price_quote)) {
                                //                                    $class = '';
                                //                                    $class = $mc_yarn_price_quote->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_yarn_price_quote->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_yarn_price_quote)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_yarn_price_quote->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_yarn_price_quote);
                                        //                                        if ($this->formElementErrors($mc_yarn_price_quote)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_yarn_price_quote); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_yarn_loss_percent
                                //                                if ($this->formElementErrors($mc_yarn_loss_percent)) {
                                //                                    $class = '';
                                //                                    $class = $mc_yarn_loss_percent->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_yarn_loss_percent->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_yarn_loss_percent)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_yarn_loss_percent->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_yarn_loss_percent);
                                        //                                        if ($this->formElementErrors($mc_yarn_loss_percent)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_yarn_loss_percent); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_yarn_price_total
                                //                                if ($this->formElementErrors($mc_yarn_price_total)) {
                                //                                    $class = '';
                                //                                    $class = $mc_yarn_price_total->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_yarn_price_total->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_yarn_price_total)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_yarn_price_total->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_yarn_price_total);
                                        //                                        if ($this->formElementErrors($mc_yarn_price_total)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_yarn_price_total); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_acc_dz
                                //                                if ($this->formElementErrors($mc_acc_dz)) {
                                //                                    $class = '';
                                //                                    $class = $mc_acc_dz->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_acc_dz->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_acc_dz)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_acc_dz->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_acc_dz);
                                        //                                        if ($this->formElementErrors($mc_acc_dz)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_acc_dz); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_linking_yarn
                                //                                if ($this->formElementErrors($mc_linking_yarn)) {
                                //                                    $class = '';
                                //                                    $class = $mc_linking_yarn->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_linking_yarn->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_linking_yarn)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_linking_yarn->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_linking_yarn);
                                        //                                        if ($this->formElementErrors($mc_linking_yarn)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_linking_yarn); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_button_dz
                                //                                if ($this->formElementErrors($mc_button_dz)) {
                                //                                    $class = '';
                                //                                    $class = $mc_button_dz->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_button_dz->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_button_dz)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_button_dz->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_button_dz);
                                        //                                        if ($this->formElementErrors($mc_button_dz)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_button_dz); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_patch_dz
                                //                                if ($this->formElementErrors($mc_patch_dz)) {
                                //                                    $class = '';
                                //                                    $class = $mc_patch_dz->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_patch_dz->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_patch_dz)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_patch_dz->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_patch_dz);
                                        //                                        if ($this->formElementErrors($mc_patch_dz)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_patch_dz); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_lurex_dz
                                //                                if ($this->formElementErrors($mc_lurex_dz)) {
                                //                                    $class = '';
                                //                                    $class = $mc_lurex_dz->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_lurex_dz->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_lurex_dz)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_lurex_dz->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_lurex_dz);
                                        //                                        if ($this->formElementErrors($mc_lurex_dz)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_lurex_dz); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_print
                                //                                if ($this->formElementErrors($mc_print)) {
                                //                                    $class = '';
                                //                                    $class = $mc_print->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_print->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_print)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_print->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_print);
                                        //                                        if ($this->formElementErrors($mc_print)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_print); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_emboardary
                                //                                if ($this->formElementErrors($mc_emboardary)) {
                                //                                    $class = '';
                                //                                    $class = $mc_emboardary->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_emboardary->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_emboardary)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_emboardary->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_emboardary);
                                        //                                        if ($this->formElementErrors($mc_emboardary)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_emboardary); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_courier_cost
                                //                                if ($this->formElementErrors($mc_courier_cost)) {
                                //                                    $class = '';
                                //                                    $class = $mc_courier_cost->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_courier_cost->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_courier_cost)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_courier_cost->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_courier_cost);
                                        //                                        if ($this->formElementErrors($mc_courier_cost)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_courier_cost); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_air_cost
                                //                                if ($this->formElementErrors($mc_air_cost)) {
                                //                                    $class = '';
                                //                                    $class = $mc_air_cost->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_air_cost->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_air_cost)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_air_cost->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_air_cost);
                                        //                                        if ($this->formElementErrors($mc_air_cost)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_air_cost); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_chem
                                //                                if ($this->formElementErrors($mc_chem)) {
                                //                                    $class = '';
                                //                                    $class = $mc_chem->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_chem->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_chem)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_chem->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_chem);
                                        //                                        if ($this->formElementErrors($mc_chem)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_chem); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // mc_total
                                //                                if ($this->formElementErrors($mc_total)) {
                                //                                    $class = '';
                                //                                    $class = $mc_total->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $mc_total->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($mc_total)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $mc_total->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($mc_total);
                                        //                                        if ($this->formElementErrors($mc_total)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($mc_total); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="tab-pane" id="production">
                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Knit</th>
                                    <th>Link</th>
                                    <th>Tri</th>
                                    <th>NK</th>
                                    <th>Pkt</th>
                                    <th>PIP</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        //<?php
                                        //                                            // pcv_knit
                                        //                                            if ($this->formElementErrors($pcv_knit)) {
                                        //                                                $class = '';
                                        //                                                $class = $pcv_knit->getAttribute('class');
                                        //                                                $class = $class . ' ErrorField';
                                        //                                                $pcv_knit->setAttribute('class', $class);
                                        //                                            }
                                        //                                            ?>
                                        <div class="form-group //<?php if ($this->formElementErrors($pcv_knit)) echo "error"; ?>">
                                            <label class="sr-only control-label">//<?php echo $pcv_knit->getLabel(); ?></label>
                                            <div>
                                                //<?php
                                                //                                                    echo $this->formElement($pcv_knit);
                                                //                                                    if ($this->formElementErrors($pcv_knit)):
                                                //                                                        ?>
                                                <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_knit); ?></span>
                                                //<?php
                                                //                                                    endif;
                                                //                                                    ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        //<?php
                                        //                                            // pcv_link
                                        //                                            if ($this->formElementErrors($pcv_link)) {
                                        //                                                $class = '';
                                        //                                                $class = $pcv_link->getAttribute('class');
                                        //                                                $class = $class . ' ErrorField';
                                        //                                                $pcv_link->setAttribute('class', $class);
                                        //                                            }
                                        //                                            ?>
                                        <div class="form-group //<?php if ($this->formElementErrors($pcv_link)) echo "error"; ?>">
                                            <label class="sr-only control-label">//<?php echo $pcv_link->getLabel(); ?></label>
                                            <div>
                                                //<?php
                                                //                                                    echo $this->formElement($pcv_link);
                                                //                                                    if ($this->formElementErrors($pcv_link)):
                                                //                                                        ?>
                                                <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_link); ?></span>
                                                //<?php
                                                //                                                    endif;
                                                //                                                    ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        //<?php
                                        //                                            // pcv_tri
                                        //                                            if ($this->formElementErrors($pcv_tri)) {
                                        //                                                $class = '';
                                        //                                                $class = $pcv_tri->getAttribute('class');
                                        //                                                $class = $class . ' ErrorField';
                                        //                                                $pcv_tri->setAttribute('class', $class);
                                        //                                            }
                                        //                                            ?>
                                        <div class="form-group //<?php if ($this->formElementErrors($pcv_tri)) echo "error"; ?>">
                                            <label class="sr-only control-label">//<?php echo $pcv_tri->getLabel(); ?></label>
                                            <div>
                                                //<?php
                                                //                                                    echo $this->formElement($pcv_tri);
                                                //                                                    if ($this->formElementErrors($pcv_tri)):
                                                //                                                        ?>
                                                <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_tri); ?></span>
                                                //<?php
                                                //                                                    endif;
                                                //                                                    ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        //<?php
                                        //                                            // pcv_nk
                                        //                                            if ($this->formElementErrors($pcv_nk)) {
                                        //                                                $class = '';
                                        //                                                $class = $pcv_nk->getAttribute('class');
                                        //                                                $class = $class . ' ErrorField';
                                        //                                                $pcv_nk->setAttribute('class', $class);
                                        //                                            }
                                        //                                            ?>
                                        <div class="form-group //<?php if ($this->formElementErrors($pcv_nk)) echo "error"; ?>">
                                            <label class="sr-only control-label">//<?php echo $pcv_nk->getLabel(); ?></label>
                                            <div>
                                                //<?php
                                                //                                                    echo $this->formElement($pcv_nk);
                                                //                                                    if ($this->formElementErrors($pcv_nk)):
                                                //                                                        ?>
                                                <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_nk); ?></span>
                                                //<?php
                                                //                                                    endif;
                                                //                                                    ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        //<?php
                                        //                                            // pcv_pkt
                                        //                                            if ($this->formElementErrors($pcv_pkt)) {
                                        //                                                $class = '';
                                        //                                                $class = $pcv_pkt->getAttribute('class');
                                        //                                                $class = $class . ' ErrorField';
                                        //                                                $pcv_pkt->setAttribute('class', $class);
                                        //                                            }
                                        //                                            ?>
                                        <div class="form-group //<?php if ($this->formElementErrors($pcv_pkt)) echo "error"; ?>">
                                            <label class="sr-only control-label">//<?php echo $pcv_pkt->getLabel(); ?></label>
                                            <div>
                                                //<?php
                                                //                                                    echo $this->formElement($pcv_pkt);
                                                //                                                    if ($this->formElementErrors($pcv_pkt)):
                                                //                                                        ?>
                                                <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_pkt); ?></span>
                                                //<?php
                                                //                                                    endif;
                                                //                                                    ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        //<?php
                                        //                                            // pcv_pip
                                        //                                            if ($this->formElementErrors($pcv_pip)) {
                                        //                                                $class = '';
                                        //                                                $class = $pcv_pip->getAttribute('class');
                                        //                                                $class = $class . ' ErrorField';
                                        //                                                $pcv_pip->setAttribute('class', $class);
                                        //                                            }
                                        //                                            ?>
                                        <div class="form-group //<?php if ($this->formElementErrors($pcv_pip)) echo "error"; ?>">
                                            <label class="sr-only control-label">//<?php echo $pcv_pip->getLabel(); ?></label>
                                            <div>
                                                //<?php
                                                //                                                    echo $this->formElement($pcv_pip);
                                                //                                                    if ($this->formElementErrors($pcv_pip)):
                                                //                                                        ?>
                                                <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_pip); ?></span>
                                                //<?php
                                                //                                                    endif;
                                                //                                                    ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>


                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcv_iron
                                //                                if ($this->formElementErrors($pcv_iron)) {
                                //                                    $class = '';
                                //                                    $class = $pcv_iron->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcv_iron->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcv_iron)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcv_iron->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcv_iron);
                                        //                                        if ($this->formElementErrors($pcv_iron)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_iron); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcv_but_ha
                                //                                if ($this->formElementErrors($pcv_but_ha)) {
                                //                                    $class = '';
                                //                                    $class = $pcv_but_ha->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcv_but_ha->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcv_but_ha)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcv_but_ha->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcv_but_ha);
                                        //                                        if ($this->formElementErrors($pcv_but_ha)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_but_ha); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcv_ftlk
                                //                                if ($this->formElementErrors($pcv_ftlk)) {
                                //                                    $class = '';
                                //                                    $class = $pcv_ftlk->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcv_ftlk->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcv_ftlk)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcv_ftlk->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcv_ftlk);
                                        //                                        if ($this->formElementErrors($pcv_ftlk)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_ftlk); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcv_half_moon
                                //                                if ($this->formElementErrors($pcv_half_moon)) {
                                //                                    $class = '';
                                //                                    $class = $pcv_half_moon->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcv_half_moon->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcv_half_moon)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcv_half_moon->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcv_half_moon);
                                        //                                        if ($this->formElementErrors($pcv_half_moon)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_half_moon); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcv_zip_l
                                //                                if ($this->formElementErrors($pcv_zip_l)) {
                                //                                    $class = '';
                                //                                    $class = $pcv_zip_l->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcv_zip_l->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcv_zip_l)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcv_zip_l->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcv_zip_l);
                                        //                                        if ($this->formElementErrors($pcv_zip_l)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_zip_l); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcv_zip_s
                                //                                if ($this->formElementErrors($pcv_zip_s)) {
                                //                                    $class = '';
                                //                                    $class = $pcv_zip_s->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcv_zip_s->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcv_zip_s)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcv_zip_s->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcv_zip_s);
                                        //                                        if ($this->formElementErrors($pcv_zip_s)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_zip_s); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcv_ttap
                                //                                if ($this->formElementErrors($pcv_ttap)) {
                                //                                    $class = '';
                                //                                    $class = $pcv_ttap->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcv_ttap->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcv_ttap)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcv_ttap->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcv_ttap);
                                        //                                        if ($this->formElementErrors($pcv_ttap)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_ttap); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcv_wind
                                //                                if ($this->formElementErrors($pcv_wind)) {
                                //                                    $class = '';
                                //                                    $class = $pcv_wind->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcv_wind->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcv_wind)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcv_wind->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcv_wind);
                                        //                                        if ($this->formElementErrors($pcv_wind)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcv_wind); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_knit
                                //                                if ($this->formElementErrors($pcw_knit)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_knit->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_knit->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_knit)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_knit->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_knit);
                                        //                                        if ($this->formElementErrors($pcw_knit)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_knit); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_link
                                //                                if ($this->formElementErrors($pcw_link)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_link->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_link->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_link)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_link->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_link);
                                        //                                        if ($this->formElementErrors($pcw_link)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_link); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_tri
                                //                                if ($this->formElementErrors($pcw_tri)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_tri->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_tri->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_tri)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_tri->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_tri);
                                        //                                        if ($this->formElementErrors($pcw_tri)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_tri); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_nk
                                //                                if ($this->formElementErrors($pcw_nk)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_nk->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_nk->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_nk)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_nk->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_nk);
                                        //                                        if ($this->formElementErrors($pcw_nk)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_nk); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_pkt
                                //                                if ($this->formElementErrors($pcw_pkt)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_pkt->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_pkt->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_pkt)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_pkt->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_pkt);
                                        //                                        if ($this->formElementErrors($pcw_pkt)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_pkt); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_pip
                                //                                if ($this->formElementErrors($pcw_pip)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_pip->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_pip->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_pip)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_pip->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_pip);
                                        //                                        if ($this->formElementErrors($pcw_pip)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_pip); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_iron
                                //                                if ($this->formElementErrors($pcw_iron)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_iron->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_iron->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_iron)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_iron->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_iron);
                                        //                                        if ($this->formElementErrors($pcw_iron)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_iron); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_but_ha
                                //                                if ($this->formElementErrors($pcw_but_ha)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_but_ha->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_but_ha->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_but_ha)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_but_ha->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_but_ha);
                                        //                                        if ($this->formElementErrors($pcw_but_ha)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_but_ha); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_ftlk
                                //                                if ($this->formElementErrors($pcw_ftlk)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_ftlk->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_ftlk->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_ftlk)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_ftlk->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_ftlk);
                                        //                                        if ($this->formElementErrors($pcw_ftlk)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_ftlk); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_half_moon
                                //                                if ($this->formElementErrors($pcw_half_moon)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_half_moon->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_half_moon->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_half_moon)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_half_moon->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_half_moon);
                                        //                                        if ($this->formElementErrors($pcw_half_moon)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_half_moon); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_zip_l
                                //                                if ($this->formElementErrors($pcw_zip_l)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_zip_l->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_zip_l->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_zip_l)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_zip_l->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_zip_l);
                                        //                                        if ($this->formElementErrors($pcw_zip_l)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_zip_l); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_zip_s
                                //                                if ($this->formElementErrors($pcw_zip_s)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_zip_s->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_zip_s->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_zip_s)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_zip_s->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_zip_s);
                                        //                                        if ($this->formElementErrors($pcw_zip_s)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_zip_s); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_ttap
                                //                                if ($this->formElementErrors($pcw_ttap)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_ttap->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_ttap->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_ttap)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_ttap->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_ttap);
                                        //                                        if ($this->formElementErrors($pcw_ttap)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_ttap); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // pcw_wind
                                //                                if ($this->formElementErrors($pcw_wind)) {
                                //                                    $class = '';
                                //                                    $class = $pcw_wind->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $pcw_wind->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($pcw_wind)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $pcw_wind->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($pcw_wind);
                                        //                                        if ($this->formElementErrors($pcw_wind)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($pcw_wind); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane" id="others">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // direct_price_rate_cost
                                //                                if ($this->formElementErrors($direct_price_rate_cost)) {
                                //                                    $class = '';
                                //                                    $class = $direct_price_rate_cost->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $direct_price_rate_cost->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($direct_price_rate_cost)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $direct_price_rate_cost->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($direct_price_rate_cost);
                                        //                                        if ($this->formElementErrors($direct_price_rate_cost)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($direct_price_rate_cost); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // final_fob_offer_price_usd
                                //                                if ($this->formElementErrors($final_fob_offer_price_usd)) {
                                //                                    $class = '';
                                //                                    $class = $final_fob_offer_price_usd->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $final_fob_offer_price_usd->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($final_fob_offer_price_usd)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $final_fob_offer_price_usd->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($final_fob_offer_price_usd);
                                        //                                        if ($this->formElementErrors($final_fob_offer_price_usd)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($final_fob_offer_price_usd); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // finit_cost
                                //                                if ($this->formElementErrors($finit_cost)) {
                                //                                    $class = '';
                                //                                    $class = $finit_cost->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $finit_cost->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($finit_cost)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $finit_cost->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($finit_cost);
                                        //                                        if ($this->formElementErrors($finit_cost)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($finit_cost); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // overhead_cost
                                //                                if ($this->formElementErrors($overhead_cost)) {
                                //                                    $class = '';
                                //                                    $class = $overhead_cost->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $overhead_cost->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($overhead_cost)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $overhead_cost->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($overhead_cost);
                                        //                                        if ($this->formElementErrors($overhead_cost)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($overhead_cost); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // com_n_bank
                                //                                if ($this->formElementErrors($com_n_bank)) {
                                //                                    $class = '';
                                //                                    $class = $com_n_bank->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $com_n_bank->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($com_n_bank)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $com_n_bank->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($com_n_bank);
                                        //                                        if ($this->formElementErrors($com_n_bank)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($com_n_bank); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // total_cost
                                //                                if ($this->formElementErrors($total_cost)) {
                                //                                    $class = '';
                                //                                    $class = $total_cost->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $total_cost->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($total_cost)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $total_cost->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($total_cost);
                                        //                                        if ($this->formElementErrors($total_cost)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($total_cost); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // lsl_profit
                                //                                if ($this->formElementErrors($lsl_profit)) {
                                //                                    $class = '';
                                //                                    $class = $lsl_profit->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $lsl_profit->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($lsl_profit)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $lsl_profit->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($lsl_profit);
                                        //                                        if ($this->formElementErrors($lsl_profit)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($lsl_profit); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // buying_for_com
                                //                                if ($this->formElementErrors($buying_for_com)) {
                                //                                    $class = '';
                                //                                    $class = $buying_for_com->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $buying_for_com->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($buying_for_com)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $buying_for_com->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($buying_for_com);
                                        //                                        if ($this->formElementErrors($buying_for_com)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($buying_for_com); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // contribution_margin
                                //                                if ($this->formElementErrors($contribution_margin)) {
                                //                                    $class = '';
                                //                                    $class = $contribution_margin->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $contribution_margin->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($contribution_margin)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $contribution_margin->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($contribution_margin);
                                        //                                        if ($this->formElementErrors($contribution_margin)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($contribution_margin); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // total_material_n_cm_cost
                                //                                if ($this->formElementErrors($total_material_n_cm_cost)) {
                                //                                    $class = '';
                                //                                    $class = $total_material_n_cm_cost->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $total_material_n_cm_cost->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($total_material_n_cm_cost)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $total_material_n_cm_cost->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($total_material_n_cm_cost);
                                        //                                        if ($this->formElementErrors($total_material_n_cm_cost)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($total_material_n_cm_cost); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                //<?php
                                //                                // unit_price_per_pcs
                                //                                if ($this->formElementErrors($unit_price_per_pcs)) {
                                //                                    $class = '';
                                //                                    $class = $unit_price_per_pcs->getAttribute('class');
                                //                                    $class = $class . ' ErrorField';
                                //                                    $unit_price_per_pcs->setAttribute('class', $class);
                                //                                }
                                //                                ?>
                                <div class="form-group //<?php if ($this->formElementErrors($unit_price_per_pcs)) echo "error"; ?>">
                                    <label class="col-sm-4 control-label">//<?php echo $unit_price_per_pcs->getLabel(); ?></label>
                                    <div class="col-sm-8">
                                        //<?php
                                        //                                        echo $this->formElement($unit_price_per_pcs);
                                        //                                        if ($this->formElementErrors($unit_price_per_pcs)):
                                        //                                            ?>
                                        <span class="ValidationErrors">//<?php echo $this->formElementErrors($unit_price_per_pcs); ?></span>
                                        //<?php
                                        //                                        endif;
                                        //                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-24 text-right">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-default reset" type="reset" onclick="history.back();">Cancel</button>
            </div>
            //<?php
            //            echo $this->form()->closeTag();
            //            ?>
            <br class="clearfix">
        </section>
    </div>
</div>
<div id="quotationYarnBlock" style="display: none;">
    //<?php
    //    echo $this->partial('merchandising/quotations/partial/yarn_details.phtml', array('index' => 0, 'data' => array()));
    //    ?>
</div>
