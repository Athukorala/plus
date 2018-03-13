
<!DOCTYPE html>
<html lang="en">
<!-- @Author Waqar Alamgir <waqarcs@yahoo.com> -->
<head>
    <meta charset="utf-8">
    <title>Picture Editor - HTML5</title>
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.css">
    <link rel="stylesheet" href="assets/css/master-wa.css">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="assets/js/plugins/excanvas.js"></script>
    <![endif]-->
</head>
<body>

<script type="text/javascript">
    var SITE_URL = '';
    var SITE_URL_APPLICATION = '';
</script>

<div class="mainWindow">

    <h2><img src="assets/images/pe.gif" alt="Picture Editor" /></h2>

    <div class="canvasWindow">
        <canvas id="canvas" width="500" height="300"></canvas>
        <div class="buttons-positions">
            <button class="btn btn-success" id="load-draft">Load Draft</button> <button id="clear" class="btn btn-danger clear">Clear</button> <div id="loader"><img src="assets/images/ajax-loader.gif" alt="loading"/> <span>Loading</span></div>
        </div>
    </div>

    <div class="controlsWindow">
        <div class="controlsWindowChild">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#object-compose" data-toggle="tab" id="_1">Compose</a></li>
                <li><a href="#object-controls" data-toggle="tab" id="_2">Controls</a></li>
                <li><a href="#object-export" data-toggle="tab" id="_3">Export</a></li>
                <li><a href="#canvas-settings" data-toggle="tab" id="_4">Settings</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="object-compose">
                    <p>
                        <strong>Add image</strong>
                    </p>
                    <p class="image_url_p">
                        <input type="text" id="image_url" class="last" placeholder="Enter image url" />
                        <br/>
                        <i>Paste an http url here.</i>
                        <button class="btn add_image_btn" type="button">Add Image</button>
                    </p>
                    <br/>
                    <p>
                        <strong>Add text</strong>
                    </p>
                    <p>
                        <input type="text" id="text-color" placeholder="Enter color i.e. #000" value="#000" />
                        <br/>
                        <select id="font-family">
                            <option value="">Select font family</option>
                            <option value="arial">Arial</option>
                            <option value="helvetica">Helvetica</option>
                            <option value="verdana">Verdana</option>
                            <option value="georgia">Georgia</option>
                            <option value="courier">Courier</option>
                            <option value="comic sans ms">Comic Sans MS</option>
                            <option value="impact">Impact</option>
                            <option value="monaco">Monaco</option>
                            <option value="optima">Optima</option>
                        </select>
                        <br/>
                        <textarea id="text" placeholder="Enter text here"></textarea>
                        <br/>
                        <button class="btn add_text_btn" type="button" id="add-text">Add Text</button>
                    </p>
                </div>

                <div class="tab-pane" id="object-controls">
                    <p>
                        <strong>Actions</strong>
                    </p>
                    <p>
                        <button class="btn" id="remove-selected">Remove selected object/group</button>
                    </p>
                    <br/>
                    <p>
                        <strong>Z-axis</strong>
                    </p>
                    <p>
                        <button id="send-backwards" class="btn">Send backwards</button>
                        <button id="send-to-back" class="btn">Send to back</button>
                        <button id="bring-forward" class="btn">Bring forwards</button>
                        <button id="bring-to-front" class="btn">Bring to front</button>
                    </p>
                    <br/>
                    <p>
                        <strong>Effects</strong>
                    </p>
                    <p>
                        <button id="shadowify" class="btn">Shadowify</button>
                    </p>
                    <br/>

                    <div id="text-wrapper">
                        <p>
                            <strong>Edit Text</strong>
                        </p>
                        <p>
                            <label for="text-edit">Text:</label>
                            <textarea id="text-edit"></textarea>
                        </p>
                        <p>
                            <label for="font-family-edit">Font family:</label>
                            <select id="font-family-edit">
                                <option value="">Select font family</option>
                                <option value="arial">Arial</option>
                                <option value="helvetica">Helvetica</option>
                                <option value="verdana">Verdana</option>
                                <option value="georgia">Georgia</option>
                                <option value="courier">Courier</option>
                                <option value="comic sans ms">Comic Sans MS</option>
                                <option value="impact">Impact</option>
                                <option value="monaco">Monaco</option>
                                <option value="optima">Optima</option>
                            </select>
                        </p>
                        <p>
                            <label for="text-align-edit">Text alignment:</label>
                            <select id="text-align-edit">
                                <option value="">Select alignment</option>
                                <option value="left">Left</option>
                                <option value="center">Center</option>
                                <option value="right">Right</option>
                                <option value="justify">Justify</option>
                            </select>
                        </p>
                        <p>
                            <label for="text-bg-color">Background color:</label>
                            <input type="text" id="text-bg-color" size="10" />
                        </p>
                        <p>
                            <label for="text-lines-bg-color">Background text color:</label>
                            <input type="text" id="text-lines-bg-color" size="10" />
                        </p>
                        <p>
                            <label for="text-stroke-color">Stroke color:</label>
                            <input type="text" id="text-stroke-color" />
                        </p>
                        <p>
                            <label for="text-stroke-width">Stroke width:</label>
                            <select id="text-stroke-width">
                                <option value="">Select width</option>
                                `									<option value="1">1px</option>
                                <option value="2">2px</option>
                                <option value="3">3px</option>
                                <option value="4">4px</option>
                                <option value="5">5px</option>
                            </select>
                        </p>
                        <p>
                            <label for="text-font-size">Font size:</label>
                            <select id="text-font-size">
                                <option value="">Select font</option>
                                <option value="1">1px</option>
                                <option value="2">2px</option>
                                <option value="3">3px</option>
                                <option value="4">4px</option>
                                <option value="5">5px</option>
                                <option value="6">6px</option>
                                <option value="7">7px</option>
                                <option value="8">8px</option>
                                <option value="9">9px</option>
                                <option value="10">10px</option>
                                <option value="11">11px</option>
                                <option value="12">12px</option>
                                <option value="13">13px</option>
                                <option value="14">14px</option>
                                <option value="15">15px</option>
                                <option value="16">16px</option>
                                <option value="17">17px</option>
                                <option value="18">18px</option>
                                <option value="19">19px</option>
                                <option value="20">20px</option>
                                <option value="21">21px</option>
                                <option value="22">22px</option>
                                <option value="23">23px</option>
                                <option value="24">24px</option>
                                <option value="25">25px</option>
                                <option value="26">26px</option>
                                <option value="27">27px</option>
                                <option value="28">28px</option>
                                <option value="29">29px</option>
                                <option value="30">30px</option>
                                <option value="31">31px</option>
                                <option value="32">32px</option>
                                <option value="33">33px</option>
                                <option value="34">34px</option>
                                <option value="35">35px</option>
                                <option value="36">36px</option>
                                <option value="37">37px</option>
                                <option value="38">38px</option>
                                <option value="39">39px</option>
                                <option value="40">40px</option>
                                <option value="41">41px</option>
                                <option value="42">42px</option>
                                <option value="43">43px</option>
                                <option value="44">44px</option>
                                <option value="45">45px</option>
                                <option value="46">46px</option>
                                <option value="47">47px</option>
                                <option value="48">48px</option>
                                <option value="49">49px</option>
                                <option value="50">50px</option>
                                <option value="51">51px</option>
                                <option value="52">52px</option>
                                <option value="53">53px</option>
                                <option value="54">54px</option>
                                <option value="55">55px</option>
                                <option value="56">56px</option>
                                <option value="57">57px</option>
                                <option value="58">58px</option>
                                <option value="59">59px</option>
                                <option value="60">60px</option>
                                <option value="61">61px</option>
                                <option value="62">62px</option>
                                <option value="63">63px</option>
                                <option value="64">64px</option>
                                <option value="65">65px</option>
                                <option value="66">66px</option>
                                <option value="67">67px</option>
                                <option value="68">68px</option>
                                <option value="69">69px</option>
                                <option value="70">70px</option>
                                <option value="71">71px</option>
                                <option value="72">72px</option>
                                <option value="73">73px</option>
                                <option value="74">74px</option>
                                <option value="75">75px</option>
                                <option value="76">76px</option>
                                <option value="77">77px</option>
                                <option value="78">78px</option>
                                <option value="79">79px</option>
                                <option value="80">80px</option>
                                <option value="81">81px</option>
                                <option value="82">82px</option>
                                <option value="83">83px</option>
                                <option value="84">84px</option>
                                <option value="85">85px</option>
                                <option value="86">86px</option>
                                <option value="87">87px</option>
                                <option value="88">88px</option>
                                <option value="89">89px</option>
                                <option value="90">90px</option>
                                <option value="91">91px</option>
                                <option value="92">92px</option>
                                <option value="93">93px</option>
                                <option value="94">94px</option>
                                <option value="95">95px</option>
                                <option value="96">96px</option>
                                <option value="97">97px</option>
                                <option value="98">98px</option>
                                <option value="99">99px</option>
                                <option value="100">100px</option>
                                <option value="101">101px</option>
                                <option value="102">102px</option>
                                <option value="103">103px</option>
                                <option value="104">104px</option>
                                <option value="105">105px</option>
                                <option value="106">106px</option>
                                <option value="107">107px</option>
                                <option value="108">108px</option>
                                <option value="109">109px</option>
                                <option value="110">110px</option>
                                <option value="111">111px</option>
                                <option value="112">112px</option>
                                <option value="113">113px</option>
                                <option value="114">114px</option>
                                <option value="115">115px</option>
                                <option value="116">116px</option>
                                <option value="117">117px</option>
                                <option value="118">118px</option>
                                <option value="119">119px</option>
                                <option value="120">120px</option>
                            </select>
                        </p>
                        <p>
                            <label for="text-line-height">Line height:</label>
                            <select id="text-line-height">
                                <option value="">Select height</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </p>
                        <p>
                            <button type="button" class="btn" id="text-cmd-bold">Bold</button>
                            <button type="button" class="btn" id="text-cmd-italic">Italic</button>
                            <button type="button" class="btn" id="text-cmd-underline">Underline</button>
                            <button type="button" class="btn" id="text-cmd-linethrough">Linethrough</button>
                            <button type="button" class="btn" id="text-cmd-overline">Overline</button>
                        </p>
                    </div>
                </div>

                <div class="tab-pane" id="object-export">
                    <p>
                        <strong>Save</strong>
                    </p>
                    <p>
                        <button class="btn btn-success" id="rasterize">PNG</button>
                        <button class="btn btn-success" id="rasterize-jpeg">JPEG</button><br/>
                        <i>JPEG format does not support transparency, so set background to #fff before exporting it.</i>
                    </p>
                    <br/>
                    <p>
                        <strong>Actions</strong>
                    </p>
                    <p>
                        <button class="btn btn-success" id="rasterize-draft">Save as Draft</button>
                    </p>
                </div>

                <div class="tab-pane" id="canvas-settings">
                    <p>
                        <strong>Image size</strong>
                    </p>
                    <p class="image_url_p">
                        <input type="text" id="image_size_w" placeholder="Enter image width" value="500" />
                        <br/>
                        <input type="text" id="image_size_h" class="last" placeholder="Enter image height" value="300" />
                        <br/>
                        <i>Maximum image size can be set to 600x400.</i>
                    </p>
                    <br/>
                    <p>
                        <strong>Select Background</strong>
                    </p>
                    <p>
                        <input type="text" id="canvas-background-picker" placeholder="Enter color i.e. #000" />
                    </p>
                </div>

            </div>
        </div>
    </div>

    <form id="downloadFileForm" method="POST" action="upload.php">
        <input type="hidden" id="file_data" name="file_data" />
        <input type="hidden" id="file_type" name="file_type" />
    </form>

    <div class="about">
        Built using fabric.js, jquery and bootstrap by <a target="_blank" href="http://twitter.com/wajrcs">@wajrcs</a> &nbsp;.&nbsp; <a href="https://github.com/waqar-alamgir/html5-picture-editor/fork">Fork</a> &nbsp;.&nbsp; <iframe width="95px" scrolling="0" height="21px" frameborder="0" allowtransparency="true" style="margin-bottom:-6px;" src="http://ghbtns.com/github-btn.html?user=waqar-alamgir&amp;repo=html5-picture-editor&amp;type=watch&amp;count=true"></iframe>
    </div>

</div>
<script type="text/javascript" src="http://waqaralamgir.tk/app/html5-picture-editor/assets/js/plugins/jquery.js"></script>
<script type="text/javascript" src="http://waqaralamgir.tk/app/html5-picture-editor/assets/js/plugins/fabric.js"></script>
<script type="text/javascript" src="http://waqaralamgir.tk/app/html5-picture-editor/assets/js/pet.js"></script>
<script type="text/javascript" src="http://waqaralamgir.tk/app/html5-picture-editor/assets/js/master-wa.js"></script>
<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_{$app['name']}&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body>
</html>