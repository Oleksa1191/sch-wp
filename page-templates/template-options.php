<?php
/*
Template name: Options
*/
get_header(); 
$bannerimage = get_field('page_banner');
?>

<div class="inner-banner-wrap" style="background-image: url('<?php if(!empty($bannerimage)){ echo $bannerimage; }else{ echo get_template_directory_uri().'/img/slider.png'; }; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="inner-banner-inner">
                    <div class="inner-banner">
                        <h1 class="mb-0"><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="option-main section-padding">
    <div class="option-main-after">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="options-wrap">
                        <form onsubmit="openModal()" id="optForm" action="options.html">

                            <div class="option-block">
                                <h3>Your Tiny Home</h3>

                                <div class="ob">
                                    <div class="ob-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/group-6.png" alt="">
                                        <h4>Model</h4>

                                        <div class="field-group">
                                            <label for="model">Model</label>


                                            <select id="model-htmlselect">
                                                <option value="46750" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/glenwood.png" data-description="<?php echo get_template_directory_uri(); ?>/img/glenwood.png">Glenwood</option>

                                                <option value="48900" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/Echoe.png" data-description="<?php echo get_template_directory_uri(); ?>/img/Echoe.png">Echoe</option>

                                                <option value="40395" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/CaneyCreek.png" data-description="<?php echo get_template_directory_uri(); ?>/img/CaneyCreek.png">Caney Creek</option>

                                                <option value="47900" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/Grande-II.png" data-description="<?php echo get_template_directory_uri(); ?>/img/Grande-II.png">Grande II</option>

                                                <option value="48900" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/Horseshoe.png" data-description="<?php echo get_template_directory_uri(); ?>/img/Horseshoe.png">Horseshoe</option>

                                                <option value="47895" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/Zion.png" data-description="<?php echo get_template_directory_uri(); ?>/img/Zion.png">Zion</option>

                                                <option value="55295" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/Jackson.png" data-description="<?php echo get_template_directory_uri(); ?>/img/Jackson.png">Jackson</option>
                                            </select>

                                            <select id="counter">
                                                <option value="">Ripon</option>
                                                <option value="">Safwana</option>
                                                <option value="">safwan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ob-right text-center">
                                        <div class="echoe">
                                            <img class="modelselected" />
                                            <span class="modeltext"></span>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="option-block">
                                <div class="ob-header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/exterior.jpg" alt="">
                                    <h4>Exterior</h4>
                                </div>

                                <div class="ob">
                                    <div class="ob-left">

                                        <div class="field-group">
                                            <label for="siding-htmlselect">Siding</label>

                                            <select id="siding-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Alder_Exterior_Siding.png">Alder</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Barnwood_Exterior_Siding.png">Barnwood</option>
                                                <option value="1295" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Cavern_Moss_Exterior_Siding.png">Cavern Moss</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Cedar_Exterior_Siding.png">Cedar</option>
                                                <option value="1295" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Dark_Sage_Exterior_Siding.png">Dark Sage</option>
                                                <option value="1295" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Elemental_Exterior_Siding.png">Elemental</option>
                                                <option value="1295" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Graceful_Exterior_Siding.png">Graceful</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Silver_Ash_Exterior_Siding.png">Silver Ash</option>
                                                <option value="1295" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Steeple_Gray_Exterior_Siding.png">Steeple Gray</option>
                                                <option value="1295" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Siding/Tropical_Tan_Exterior_Siding.png">Tropical Tan</option>
                                            </select>
                                        </div>

                                        <div class="field-group">
                                            <label for="windows-htmlselect">Windows</label>

                                            <select id="windows-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Windows/Clay_Window.png">Clay</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Windows/white_window.png">White</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="ob-right">


                                        <div class="field-group">
                                            <label for="roof-htmlselect">Roofing</label>

                                            <select id="roof-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Ash_Gray_Roofing.jpg">Ash Gray</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Black_Roofing.jpg">Black</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Brite_Red_Roofing.jpg">Brite Red</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Burgundy_Roofing.jpg">Burgundy</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Burnished_Slate_Roofing.jpg">Burnished Slate</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Charcoal_Roofing.jpg">Charcoal</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Clay_Roofing.jpg">Clay</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Copper_Penny_Roofing.jpg">Copper Penny</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Copper_Roofing.jpg">Copper</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Country_Red_Roofing.jpg">Country Red</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Forest_Green_Roofing.jpg">Forest Green</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Galvalume_Roofing.jpg">Galvalume</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Hawiann_Blue_Roofing.jpg">Hawaiian Blue</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Ivory_Roofing.jpg">Ivory</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Ivy_Green_Roofing.jpg">Ivy Green</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Light_Stone_Roofing.jpg">Light Stone</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Polar_White_Roofing.jpg">Polar White</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Regal_Blue_Roofing.jpg">Regal Blue</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Sahara_Tan_Roofing.jpg">Sahara Tan</option>
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Roofing/Tudor_Brown_Roofing.jpg">Tudor Brown</option>
                                            </select>
                                        </div>

                                        <div class="field-group">
                                            <label for="porch-htmlselect">Decking</label>

                                            <select id="porch-htmlselect">

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Decking/Natural_Wood_Deckingpng.png">Natural Wood Porch Decking</option>

                                                <option value="1695" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Decking/Gray_Composite_Decking.png">Gray Composite Porch Decking</option>

                                                <option value="1695" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/Exterior/Decking/Tan_Composite_Decking.png">Tan Composite Porch Decking</option>
                                            </select>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="option-block">
                                <div class="ob-header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/exterior.jpg" alt="">
                                    <h4>Interior</h4>
                                </div>

                                <div class="ob">
                                    <div class="ob-left">

                                        <div class="field-group">
                                            <label for="appliances-htmlselect">Appliances</label>

                                            <select id="appliances-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Appliances/White_Appliances-01.png">White</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Appliances/Black_Appliances-01.png">Black</option>

                                                <option value="875" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Appliances/Stainless Steel_Appliances-01-01.png">Stainless Steel</option>
                                            </select>
                                        </div>



                                        <div class="field-group">
                                            <label for="counter-htmlselect">Counter Tops</label>

                                            <select id="counter-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/CounterTops/Italian_White_De_Pesco_Counter_Top.png">Italian White Di Pesco</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/CounterTops/Labrador_Granite_Counter_Top.png">Labrador Granite</option>

                                                <option class="varvl" value="" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/CounterTops/Tranquility_Counter_Top.png">Tranquility Quartz</option>

                                                <option class="varvl" value="" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/CounterTops/Obsidian_Black_Counter_Top.png">Obsidian Black Granite</option>
                                            </select>
                                        </div>


                                        <div class="field-group">
                                            <label for="walls-htmlselect">Interior Wall</label>

                                            <select id="walls-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Walls/Clear_Laquer_Interior_Wall.png">Natural</option>

                                                <option value="795" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Walls/White_Wash_Interior_Wall.png">Whitewash</option>

                                                <option value="795" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Walls/Gray_Wash_Interior_Wall.png">Graywash</option>

                                                <option value="795" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Walls/White_Interior_Wall.png">Painted White</option>
                                            </select>
                                        </div>

                                        <div class="field-group">
                                            <label for="loft-steps-htmlselect">Loft</label>

                                            <select id="loft-steps-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Loft/Carpet_Light Brown_Flooring.png">Light Brown Carpet</option>

                                                <option value="150" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Loft/Drfitwood_Flooring.png">Driftwood Linoleum</option>

                                                <option value="150" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Loft/Lime_Oak_Flooring.png">Lime Oak Linoleum</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="ob-right">

                                        <div class="field-group">
                                            <label for="interior-cabinet-htmlselect">Cabinets</label>

                                            <select id="interior-cabinet-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Cabinets/Natural_Wood_Cabinets.png">Natural Wood</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Cabinets/Dark_Walnut_Cabinets.png">Dark Walnut</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Cabinets/Whitewash_Cabinets.png">Whitewash</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Cabinets/Gray_Wash_Cabinetsl.png">Graywash</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Cabinets/White_Cabinets.png">White</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Cabinets/Victorian_Pewter_Cabinets.png">Victorian Pewter</option>
                                            </select>
                                        </div>

                                        <div class="field-group">
                                            <label for="flooring-htmlselect">Flooring</label>

                                            <select id="flooring-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Flooring/Drfitwood_flooring.png">Driftwood</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Flooring/Lime_Oak_Flooring.png">Lime Oak</option>
                                            </select>
                                        </div>

                                        <div class="field-group">
                                            <label for="siding-htmlselect">Trim</label>

                                            <select id="interior-trim-htmlselect">
                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Trim/Clear_Laquer_Trim..png">Natural Wood</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Trim/Black_Walnut_Trim.png">Dark Walnut</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Trim/White_Wash_Trim..png">Whitewash</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Trim/Gray_Wash_Trim..png">Graywash</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Trim/White_Trim..png">White</option>

                                                <option value="0" data-imagesrc="<?php echo get_template_directory_uri(); ?>/img/options/interior/Trim/Victorian_Pewter_Trim..png">Victorian Pewter</option>
                                            </select>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <div class="option-block">
                                <div class="ob-header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/extras.jpg" alt="">
                                    <h4>Extras</h4>
                                </div>

                                <div class="ob">
                                    <div class="ob-left">

                                        <div class="field-group">
                                            <label for="air-handler"> <input type="checkbox" id="air-handler" name="air-handler" value="9000 BTU Air Handler in Loft (Requires 24000 Condenser BTU)"> 9000 BTU Air Handler in Loft (Requires 24000 Condenser BTU)</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="ed-under-cabinet"> <input type="checkbox" id="led-under-cabinet" name="led-under-cabinet" value="LED Under Cabinet Lighting"> LED Under Cabinet Lighting</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="on-demand-tankless"> <input type="checkbox" id="on-demand-tankless" name="led-under-cabinet" value="On-Demand Tankless Water Heater (Requires 200 AMP)"> On-Demand Tankless Water Heater (Requires 200 AMP)</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="electric-fireplace"> <input type="checkbox" id="electric-fireplace" name="electric-fireplace" value="Electric Fireplace"> Electric Fireplace</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="french-door"> <input type="checkbox" id="french-door" name="french-door" value="Exterior French Doors with Blinds"> Exterior French Doors with Blinds</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="built-in-bunks"> <input type="checkbox" id="built-in-bunks" name="built-in-bunks" value="Built-In Bunks (No Mattress)"> Built-In Bunks (No Mattress)</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="nightstands-in-bedroom"> <input type="checkbox" id="nightstands-in-bedroom" name="nightstands-in-bedroom" value="Nightstands in Bedroom"> Nightstands in Bedroom</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="medicine-cabinet"> <input type="checkbox" id="medicine-cabinet" name="medicine-cabinet" value="Medicine Cabinet"> Medicine Cabinet</label>
                                        </div>
                                    </div>
                                    <div class="ob-right">
                                        <div class="field-group">
                                            <label for="btu-condenser"> <input type="checkbox" id="btu-condenser" name="btu-condenser" value="24000 BTU Condenser"> 24000 BTU Condenser</label>
                                        </div>


                                        <div class="field-group">
                                            <label for="whater-heater-with-cover"> <input type="checkbox" id="whater-heater-with-cover" name="whater-heater-with-cover" value="Tankless Water Heater With Cover"> Tankless Water Heater With Cover</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="amp-box-200"> <input type="checkbox" id="amp-box-200" name="amp-box-200" value="200 AMP Box"> 200 AMP Box</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="porch-ceiling-fan"> <input type="checkbox" id="porch-ceiling-fan" name="porch-ceiling-fan" value="Porch Ceiling Fan"> Porch Ceiling Fan</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="barn-door-and-hardware"> <input type="checkbox" id="barn-door-and-hardware" name="barn-door-and-hardware" value="Barn Door and Hardware"> Barn Door and Hardware</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="built-in-queen-bed"> <input type="checkbox" id="built-in-queen-bed" name="built-in-queen-bed" value="Built-In Queen Bed"> Built-In Queen Bed</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="oval-bath-mirror"> <input type="checkbox" id="oval-bath-mirror" name="oval-bath-mirror" value="Oval Bath Mirror"> Oval Bath Mirror</label>
                                        </div>

                                        <div class="field-group">
                                            <label for="pedestal-sink-with-faucet"> <input type="checkbox" id="oval-bath-mirror" name="pedestal-sink-with-faucet" value="Pedestal Sink With Faucet"> Pedestal Sink With Faucet</label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="option-block">
                                <div class="ob-header">
                                    <h4>Personal Information</h4>
                                </div>

                                <div class="ob">
                                    <div class="ob-left">

                                        <div class="field-group ">
                                            <label for="full-name">Full Name</label>
                                            <div class="name"><input type="text" placeholder="Full Name" name="full-name" id="full-name"></div>
                                        </div>

                                    </div>
                                    <div class="ob-right">
                                        <div class="field-group ">
                                            <label for="email">Email Address</label>
                                            <div class="email"><input type="email" name="email" id="email" placeholder="Email Address"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="op-submit sch-btn">
                                <button type="submit" name="submit">Get Quote</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="optModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-quote text-center">
                        <p>Quote</p>
                        <h4>$<span class="modelprice"></span></h4>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="opt-modal-inner">
                        <div class="opt-mod-thumb">
                            <img class="modelselected" />
                        </div>

                        <div class="opt-mods-model">
                            <div class="opt-mods">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/group-6.png" alt="">
                                <h4>Model</h4>
                            </div>
                            <div class="opt-mods-right">
                                <ul class="omr model ">
                                    <li>Model <span>Echoe</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="opt-mods-model">
                            <div class="opt-mods">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/exterior.jpg" alt="">
                                <h4>Exterior</h4>
                            </div>
                            <div class="opt-mods-right">
                                <ul class="omr">
                                    <li>Siding <span>Silver Ash</span></li>
                                    <li>Roof <span>Polar White</span></li>
                                    <li>Trim <span>Matched to Siding</span></li>
                                    <li>Composite Porch Decking <span>Gray</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="opt-mods-model">
                            <div class="opt-mods">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/exterior.jpg" alt="">
                                <h4>Interior</h4>
                            </div>
                            <div class="opt-mods-right">
                                <ul class="omr">
                                    <li>Flooring <span>Driftwood</span></li>
                                    <li>Interior Trim <span>White</span></li>
                                    <li>Loft <span>Carpet</span></li>
                                    <li>Interior Cabinet <span>White</span></li>
                                    <li>Walls <span>White Wash</span></li>
                                    <li>Loft Steps <span>Stained Wood</span></li>
                                    <li>Appliances <span>Black</span></li>
                                    <li>Ceilings <span>White Wash</span></li>
                                    <li>Interior Door <span>White</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="opt-mods-model">
                            <div class="opt-mods">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/extras.jpg" alt="">
                                <h4>Extras</h4>
                            </div>
                            <div class="opt-mods-right">
                                <ul>
                                    <li><span class="plus">+</span> 9000 BTU Air Handler in Loft (Requires 24000 Condenser BTU)</li>
                                    <li><span class="plus">+</span> 24000 BTU Condenser</li>
                                    <li><span class="plus">+</span> Tankless Water Heater With Cover</li>
                                    <li><span class="plus">+</span> On-Demand Tankless Water Heater (Requires 200 AMP)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>

<?php get_footer(); ?>
