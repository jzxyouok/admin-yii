<!---------------加载页面样式---------------->
<link href="/style/font-awesome/css/font-awesome.css" rel="stylesheet">
<div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <!------窗口宽度------>
        <div class="span9">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Form Elements</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="#" method="get" class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">Select input</label>
                            <div class="controls">
                                <div class="select2-container" id="s2id_autogen1">    <a href="#" onclick="return false;" class="select2-choice" tabindex="0">   <span>First option</span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><div class="select2-drop select2-with-searchbox select2-offscreen" style="display: block;">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input" tabindex="0">   </div>   <ul class="select2-results"></ul></div>    </div><select style="display: none;">
                                    <option>First option</option>
                                    <option>Second option</option>
                                    <option>Third option</option>
                                    <option>Fourth option</option>
                                    <option>Fifth option</option>
                                    <option>Sixth option</option>
                                    <option>Seventh option</option>
                                    <option>Eighth option</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Multiple Select input</label>
                            <div class="controls">
                                <div class="select2-container select2-container-multi" id="s2id_autogen2">    <ul class="select2-choices">  <li class="select2-search-choice">    <div>Second option</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-field">    <input type="text" autocomplete="off" class="select2-input" tabindex="0" style="width: 10px;">  </li></ul></div><select multiple="" style="display: none;">
                                    <option>First option</option>
                                    <option selected="">Second option</option>
                                    <option>Third option</option>
                                    <option>Fourth option</option>
                                    <option>Fifth option</option>
                                    <option>Sixth option</option>
                                    <option>Seventh option</option>
                                    <option>Eighth option</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Radio inputs</label>
                            <div class="controls">
                                <label>
                                    <div class="radio" id="uniform-undefined"><span><input type="radio" name="radios" style="opacity: 0;"></span></div>
                                    First One</label>
                                <label>
                                    <div class="radio" id="uniform-undefined"><span><input type="radio" name="radios" style="opacity: 0;"></span></div>
                                    Second One</label>
                                <label>
                                    <div class="radio" id="uniform-undefined"><span><input type="radio" name="radios" style="opacity: 0;"></span></div>
                                    Third One</label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Checkboxes</label>
                            <div class="controls">
                                <label>
                                    <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="radios" style="opacity: 0;"></span></div>
                                    First One</label>
                                <label>
                                    <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="radios" style="opacity: 0;"></span></div>
                                    Second One</label>
                                <label>
                                    <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="radios" style="opacity: 0;"></span></div>
                                    Third One</label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="checkboxes" class="control-label">Data Toggle checkbox</label>
                            <div class="controls">
                                <div data-toggle="buttons-checkbox" class="btn-group">
                                    <button class="btn btn-primary" type="button">Left</button>
                                    <button class="btn btn-primary" type="button">Middle</button>
                                    <button class="btn btn-primary" type="button">Right</button>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="checkboxes" class="control-label">Data Radio button</label>
                            <div class="controls">
                                <div data-toggle="buttons-radio" class="btn-group">
                                    <button class="btn btn-primary" type="button">Left</button>
                                    <button class="btn btn-primary" type="button">Middle</button>
                                    <button class="btn btn-primary" type="button">Right</button>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File upload input</label>
                            <div class="controls">
                                <div class="uploader" id="uniform-undefined"><input type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Disabled Input</label>
                            <div class="controls">
                                <input type="text" placeholder="You can't type anything…" disabled="" class="span11">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>