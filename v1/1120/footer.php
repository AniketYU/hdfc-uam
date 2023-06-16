  </div>
  </div>
  </div>
  </div>


  <style type="text/css">
    /*===========================
      CHAT BOOT MESSENGER
    ===========================*/
    #Smallchat .Messages,
    #Smallchat .Messages_list {
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
    }

    .chat_close_icon {
      cursor: pointer;
      color: #fff;
      font-size: 16px;
      position: absolute;
      right: 12px;
      z-index: 9;
    }

    .chat_on {
      background: #3c80f6;
      right: 40px;
      bottom: 180px;
      animation-delay: 0.15s;
      animation: bounce-out-nds 0.15s linear;
      animation-fill-mode: forwards;
    }

    .chat_on_icon {
      color: #fff;
      font-size: 25px;
      text-align: center;
    }

    #Smallchat .Layout {
      pointer-events: auto;
      box-sizing: content-box !important;
      z-index: 999999999;
      position: fixed;
      bottom: 20px;
      min-width: 50px;
      max-width: 300px;
      max-height: 30px;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      border-radius: 50px;
      box-shadow: 5px 0 20px 5px rgba(0, 0, 0, .1);
      -webkit-animation: appear .15s cubic-bezier(.25, .25, .5, 1.1);
      animation: appear .15s cubic-bezier(.25, .25, .5, 1.1);
      -webkit-animation-fill-mode: forwards;
      animation-fill-mode: forwards;
      opacity: 0;
      -webkit-transition: right .1s cubic-bezier(.25, .25, .5, 1), bottom .1s cubic-bezier(.25, .25, .5, 1), min-width .2s cubic-bezier(.25, .25, .5, 1), max-width .2s cubic-bezier(.25, .25, .5, 1), min-height .2s cubic-bezier(.25, .25, .5, 1), max-height .2s cubic-bezier(.25, .25, .5, 1), border-radius 50ms cubic-bezier(.25, .25, .5, 1) .15s, background-color 50ms cubic-bezier(.25, .25, .5, 1) .15s, color 50ms cubic-bezier(.25, .25, .5, 1) .15s;
      transition: right .1s cubic-bezier(.25, .25, .5, 1), bottom .1s cubic-bezier(.25, .25, .5, 1), min-width .2s cubic-bezier(.25, .25, .5, 1), max-width .2s cubic-bezier(.25, .25, .5, 1), min-height .2s cubic-bezier(.25, .25, .5, 1), max-height .2s cubic-bezier(.25, .25, .5, 1), border-radius 50ms cubic-bezier(.25, .25, .5, 1) .15s, background-color 50ms cubic-bezier(.25, .25, .5, 1) .15s, color 50ms cubic-bezier(.25, .25, .5, 1) .15s
    }

    #Smallchat .Layout-right {
      right: 20px
    }

    #Smallchat .Layout-open {
      overflow: hidden;
      min-width: 300px;
      max-width: 300px;
      height: 500px;
      max-height: 500px;
      border-radius: 10px;
      color: #fff;
      -webkit-transition: right .1s cubic-bezier(.25, .25, .5, 1), bottom .1s cubic-bezier(.25, .25, .5, 1.1), min-width .2s cubic-bezier(.25, .25, .5, 1.1), max-width .2s cubic-bezier(.25, .25, .5, 1.1), max-height .2s cubic-bezier(.25, .25, .5, 1.1), min-height .2s cubic-bezier(.25, .25, .5, 1.1), border-radius 0ms cubic-bezier(.25, .25, .5, 1.1), background-color 0ms cubic-bezier(.25, .25, .5, 1.1), color 0ms cubic-bezier(.25, .25, .5, 1.1);
      transition: right .1s cubic-bezier(.25, .25, .5, 1), bottom .1s cubic-bezier(.25, .25, .5, 1.1), min-width .2s cubic-bezier(.25, .25, .5, 1.1), max-width .2s cubic-bezier(.25, .25, .5, 1.1), max-height .2s cubic-bezier(.25, .25, .5, 1.1), min-height .2s cubic-bezier(.25, .25, .5, 1.1), border-radius 0ms cubic-bezier(.25, .25, .5, 1.1), background-color 0ms cubic-bezier(.25, .25, .5, 1.1), color 0ms cubic-bezier(.25, .25, .5, 1.1);
    }

    #Smallchat .Layout-expand {
      height: 400px;
      min-height: 400px;
      display: none;
    }

    #Smallchat .Layout-mobile {
      bottom: 10px
    }

    #Smallchat .Layout-mobile.Layout-open {
      width: calc(100% - 20px);
      min-width: calc(100% - 20px)
    }

    #Smallchat .Layout-mobile.Layout-expand {
      bottom: 0;
      height: 100%;
      min-height: 100%;
      width: 100%;
      min-width: 100%;
      border-radius: 0 !important
    }

    @-webkit-keyframes appear {
      0% {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0)
      }

      to {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
      }
    }

    @keyframes appear {
      0% {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0)
      }

      to {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
      }
    }

    #Smallchat .Messenger_messenger {
      position: relative;
      height: 100%;
      width: 100%;
      min-width: 300px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    #Smallchat .Messenger_header,
    #Smallchat .Messenger_messenger {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    #Smallchat .Messenger_header {
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      padding-left: 10px;
      padding-right: 40px;
      height: 40px;
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0
    }


    #Smallchat .Messenger_header h4 {
      opacity: 0;
      font-size: 16px;
      -webkit-animation: slidein .15s .3s;
      animation: slidein .15s .3s;
      -webkit-animation-fill-mode: forwards;
      animation-fill-mode: forwards
    }

    #Smallchat .Messenger_prompt {
      margin: 0;
      font-size: 16px;
      line-height: 18px;
      font-weight: 400;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis
    }

    @-webkit-keyframes slidein {
      0% {
        opacity: 0;
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
      }

      to {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
      }
    }

    @keyframes slidein {
      0% {
        opacity: 0;
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
      }

      to {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
      }
    }

    #Smallchat .Messenger_content {
      height: 350px;
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      background-color: #fff;
    }

    #Smallchat .Messages {
      position: relative;
      -webkit-flex-shrink: 1;
      -ms-flex-negative: 1;
      flex-shrink: 1;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      overflow-x: hidden;
      overflow-y: auto;
      padding: 10px;
      background-color: #fff;
      -webkit-overflow-scrolling: touch;
    }





    #Smallchat .Input {
      position: relative;
      width: 100%;
      -webkit-box-flex: 0;
      -webkit-flex-grow: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      padding-top: 17px;
      padding-bottom: 15px;
      color: #96aab4;
      background-color: #fff;
      border-top: 1px solid #e6ebea;
    }

    #Smallchat .Input-blank .Input_field {
      max-height: 20px;
    }

    #Smallchat .Input_field {
      width: 100%;
      resize: none;
      border: none;
      outline: none;
      padding: 0;
      padding-right: 0px;
      padding-left: 0px;
      padding-left: 20px;
      padding-right: 75px;
      background-color: transparent;
      font-size: 16px;
      line-height: 20px;
      min-height: 20px !important;
    }

    #Smallchat .Input_button-emoji {
      right: 45px;
    }

    #Smallchat .Input_button-upload {
      right: 75px;
    }

    #Smallchat .Input_button {
      position: absolute;
      bottom: 15px;
      width: 25px;
      height: 25px;
      padding: 0;
      border: none;
      outline: none;
      background-color: transparent;
      cursor: pointer;
    }

    #Smallchat .Input_button-send {
      right: 15px;
    }

    .upload-icon:hover {
      color: black !important;
    }

    #Smallchat .Input-emoji .Input_button-emoji .Icon,
    #Smallchat .Input_button:hover .Icon {
      -webkit-transform: scale(1.1);
      -ms-transform: scale(1.1);
      transform: scale(1.1);
      -webkit-transition: all .1s ease-in-out;
      transition: all .1s ease-in-out;
    }

    #Smallchat .Input-emoji .Input_button-emoji .Icon path,
    #Smallchat .Input_button:hover .Icon path {
      fill: #2c2c46;
    }
  </style>
  <style type="text/css">
    /* dropdown multiselect styles` */
    .select2-container--classic .select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      margin-top: 0 !important;
      background-color: none !important;
      border-color: #512E90 !important;
      color: #FFFFFF;
      margin-right: 5px !important;
      background: none !important;
      color: black !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
      color: #999 !important;
      cursor: pointer;
      display: inline-block;
      font-weight: bold;
    }

    .select2-container--classic .select2-results__options .select2-results__option[aria-selected=true],
    .select2-container--default .select2-results__options .select2-results__option[aria-selected=true] {
      background-color: #003b7e !important;
      color: #FFFFFF !important;
    }



    .select2-container--classic,
    .select2-container--default {
      width: 90% !important;
    }





    #floating-button {
      width: 55px;
      height: 55px;
      border-radius: 50%;
      background: #db4437;
      position: fixed;
      bottom: 30px;
      right: 30px;
      cursor: pointer;
      box-shadow: 0px 2px 5px #666;
    }

    #floating-button img {
      max-width: 100% !important;
      height: auto !important;
    }

    .plus {
      color: white;
      position: absolute;
      top: 0;
      display: block;
      bottom: 0;
      left: 0;
      right: 0;
      text-align: center;
      padding: 0;
      margin: 0;
      line-height: 55px;
      font-size: 38px;
      font-weight: 300;
      animation: plus-out 0.3s;
      transition: all 0.3s;
    }

    #container-floating {
      position: fixed;
      width: 70px;
      height: 70px;
      bottom: 30px;
      right: 30px;
      z-index: 127;
    }

    #container-floating:hover {
      height: 400px;
      width: 90px;
      padding: 30px;
    }

    #container-floating:hover .plus {
      animation: plus-in 0.15s linear;
      animation-fill-mode: forwards;
    }

    .edit {
      position: absolute;
      top: 0;
      display: block;
      bottom: 0;
      left: 0;
      display: block;
      right: 0;
      padding: 0;
      opacity: 0;
      margin: auto;
      line-height: 65px;
      transform: rotateZ(-70deg);
      transition: all 0.3s;
      animation: edit-out 0.3s;
    }

    #container-floating:hover .edit {
      animation: edit-in 0.2s;
      animation-delay: 0.1s;
      animation-fill-mode: forwards;
    }

    @keyframes edit-in {
      from {
        opacity: 0;
        transform: rotateZ(-70deg);
      }

      to {
        opacity: 1;
        transform: rotateZ(0deg);
      }
    }

    @keyframes edit-out {
      from {
        opacity: 1;
        transform: rotateZ(0deg);
      }

      to {
        opacity: 0;
        transform: rotateZ(-70deg);
      }
    }

    @keyframes plus-in {
      from {
        opacity: 1;
        transform: rotateZ(0deg);
      }

      to {
        opacity: 0;
        transform: rotateZ(180deg);
      }
    }

    @keyframes plus-out {
      from {
        opacity: 0;
        transform: rotateZ(180deg);
      }

      to {
        opacity: 1;
        transform: rotateZ(0deg);
      }
    }

    .nds {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      position: fixed;
      z-index: 300;
      transform: scale(0);
      cursor: pointer;
    }

    .nd1 {
      background: #d3a411;
      right: 40px;
      bottom: 120px;
      animation-delay: 0.2s;
      animation: bounce-out-nds 0.3s linear;
      animation-fill-mode: forwards;
    }

    .nd3 {
      background: #3c80f6;
      right: 40px;
      bottom: 180px;
      animation-delay: 0.15s;
      animation: bounce-out-nds 0.15s linear;
      animation-fill-mode: forwards;
    }

    .nd4 {
      background: #ba68c8;
      right: 40px;
      bottom: 240px;
      animation-delay: 0.1s;
      animation: bounce-out-nds 0.1s linear;
      animation-fill-mode: forwards;
    }

    .nd5 {
      background-image: url('https://lh3.googleusercontent.com/-X-aQXHatDQY/Uy86XLOyEdI/AAAAAAAAAF0/TBEZvkCnLVE/w140-h140-p/fb3a11ae-1fb4-4c31-b2b9-bf0cfa835c27');
      background-size: 100%;
      right: 40px;
      bottom: 300px;
      animation-delay: 0.08s;
      animation: bounce-out-nds 0.1s linear;
      animation-fill-mode: forwards;
    }

    @keyframes bounce-nds {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes bounce-out-nds {
      from {
        opacity: 1;
        transform: scale(1);
      }

      to {
        opacity: 0;
        transform: scale(0);
      }
    }

    #container-floating:hover .nds {

      animation: bounce-nds 0.1s linear;
      animation-fill-mode: forwards;
    }

    #container-floating:hover .nd3 {
      animation-delay: 0.08s;
    }

    #container-floating:hover .nd4 {
      animation-delay: 0.15s;
    }

    #container-floating:hover .nd5 {
      animation-delay: 0.2s;
    }

    .letter {
      font-size: 23px;
      font-family: 'Roboto';
      color: white;
      position: absolute;
      left: 0;
      right: 0;
      margin: 0;
      top: 0;
      bottom: 0;
      text-align: center;
      line-height: 40px;
    }

    .reminder {
      position: absolute;
      left: 0;
      right: 0;
      margin: auto;
      top: 0;
      bottom: 0;
      line-height: 40px;
    }

    .profile_palli {
      border-radius: 50%;
      width: 40px;
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto;
      right: 20px;
    }
  </style>

  <style type="text/css">
    .ajax-file-upload-error {
      display: none !important;
      width: 65px;
    }

    .ajax-upload-dragdrop {
      border: 1px solid #00517cf5;
      width: 250px !important;
      color: #DADCE3;
      text-align: left;
      vertical-align: middle;
      padding: 10px 10px 0px 10px;
      border-radius: 6px;
    }

    .ajax-file-upload {
      background: #00517cf5 !important;
    }

    /* .ajax-file-upload-statusbar input {} */

    /* .extrahtml input,
    .extrahtml select */

    .document_master_select,
    .state_selection_footer_upload {
      display: block;
      width: 200px;
      height: -webkit-calc(1.25em + 1.5rem + 2px);
      height: -moz-calc(1.25em + 1.5rem + 2px);
      height: calc(1.25em + 1.5rem + 2px);
      padding: 0.75rem 1rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.25;
      color: #4E5154;
      background-color: #FFFFFF;
      background-clip: padding-box;
      border: 1px solid #BABFC7;
      border-radius: 0.25rem;
      -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      -moz-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    .extrahtml textarea {
      width: 106%;
      margin-left: -15px;
      border-radius: 0.25rem;
    }

    .multi_upload_select_Site {
      width: 90%;
      border-radius: 6px;
      height: 50px;

    }

    .ajax-file-upload-container {
      margin: 20px 0px 20px 0px;
      width: 262px;
    }



    .ajax-file-upload-filename {
      width: auto;
    }

    @media(max-width:1400px) {
      .ajax-file-upload-statusbar {
        width: 560px !important;
        margin-left: 16px;

      }
    }

    @media(max-width:991px) {
      .ajax-file-upload-statusbar {
        width: 101% !important;

      }
    }

    .frequency_footer {
      margin-left: 14px;
    }

    .comment-position {
      position: absolute;
      top: 20%;
      left: 19%;
      font-size: 169% !important;
      color: white;
    }
  </style>

  <!--Document Upload Modal -->
  <div class="modal fade text-left" id="multiple_upload_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">Upload Documents</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1">
                <div class="row align-items-baseline">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <label for="contact_field">Select Audit Type</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <input type="radio" name="audit_type_footer" value="original" checked> Original
                    <input type="radio" name="audit_type_footer" value="remediation"> Remediation
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1">
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1">
                <div class="row align-items-baseline">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <label for="region_selection_footer">Select Region</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12 search_dropdown_div" id="region_selection_footer">
                    <select class="selectivity_dropdown">
                      <option>East</option>
                      <option>West</option>
                      <option>North</option>
                      <option>South</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1">
                <div class="row align-items-baseline">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <label for="client_selection_footer">Select Client</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12 search_dropdown_div">
                    <select class="selectivity_dropdown" id="client_selection_footer">
                      <option>HDFC</option>
                      <option>SBI</option>
                      <option>RBL</option>
                      <option>JLL</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1">
                <div class="row align-items-baseline">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <label for="account_selection_footer" >Select Account</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12 search_dropdown_div">
                    <select class="selectivity_dropdown" id="account_selection_footer">
                      <option>JP Morgan Services India Pvt Ltd</option>
                      <option>Lehman Brothers</option>
                      <option>Accenture</option>
                      <option>HDFC Bank</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1">
                <div class="row align-items-baseline">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <label for="vendor_selection_footer">Select Vendor</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12 search_dropdown_div">
                    <select class="selectivity_dropdown" id="vendor_selection_footer">
                      <option>Croma</option>
                      <option>Hewitt</option>
                      <option>Hotel Hyatt </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1">
                <div class="row align-items-baseline">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <label for="footer_multiupload_year">Select Year</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <input type="text" class="form-control" id="footer_multiupload_year" placeholder="Select Year">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-12 select_month_div_col mt-1">
                <div class="row align-items-baseline form-group ">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <label for="footer_multiupload_month">Select Month</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12 ">
                    <input type="text" class="form-control" id="footer_multiupload_month" placeholder="Select Month">
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-lg-7 mt-1">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-4">
                    <label for="fileuploader">Upload Documents</label>
                  </div>

                  <div class="">
                    <div class="col-lg-10">
                      <div class="row">
                        <fieldset class="form-group" style="z-index: 100;">
                          <div id="fileuploader" class="col-lg-12">Upload</div>
                          <button id="extrabutton" class="ml-1 btn-yu primary btn-width" style="width: 90px;" onclick="hide_img_div('ajax-file-upload-statusbar')">Start Upload </button>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="base_url" id="base_url" value="<?=base_url()?>">
                  <script>
                    $(document).ready(function() {

                            var extraObj = $("#fileuploader").uploadFile({
                            url:"<?=base_url()?>/upload.php",
                            fileName:"myfile",
                            showDelete: true,
                            extraHTML: function() {
                                    var html = "<div class='row'><div class='col'><b>Select State:</b><select name='state_name' class='selectivity_dropdown_upload'><option>Assam</option><option>Maharashtra</option><option>Goa</option><option>Gujarat</option></select></div><br>";
                                    html += "<div class='col'><b>Document Master</b>:<select name='category' class='selectivity_dropdown_upload'><option>Bonus - Bonus Register - Register</option><option>Bonus - Bonus Returns - Returns</option><option>ESI - ESI Registration Code - Registration</option><option>ESI - ESI challan - Challan</option><option>ESI - ESI challan date  of payment - Challan</option><option>ESI - ESIC ECR - Registration</option><option>ESI - ESI Cards - Preliminary</option></select></div></div>";

                                    html += "<b>Site Name:</b><select name='basic[]' multiple='multiple' class='3col active col-12 multi_upload_select_Site'><option value='an'>Andheri</option><option value='si'>Sion</option><option value='da'>Dadar</option><option value='vi'>Virar</option><option value='ca'>Charkop</option></select>";

                                    html += "<b>Comment:</b><div class='col-12'><textarea class='multi_upload_comment'></textarea></div>";
                                    var flag_count = localStorage.getItem("doc_count_flag");
                                    if (flag_count == '1') {
                                        html += '<div id="relpace_document_div"> <input type="checkbox" id="replace" class="toggle-check"><label title="Overwrite File" class="toggle-small" for="replace"></label> </div> <span>Do you want to overwrite existing file with this?</span>'
                                        localStorage.setItem("doc_count_flag", '2');
                                    } else {
                                        html += " ";
                                    }

                                    html += "</div>";

                                    return html;
                                },
                                onLoad:function(obj)
                                {
                                    $('.ajax-file-upload-container').bind('DOMNodeInserted DOMNodeRemoved', function() {
                                        $('select[multiple].active.3col').multiselect({
                                          columns: 0,
                                          placeholder: 'Select Sites',
                                          search: true,
                                          searchOptions: {
                                            'default': 'Search Sites'
                                          },
                                          selectAll: true
                                        });
                                        setTimeout(function() {

                                          $('.selectivity_dropdown_upload').selectivity({
                                            allowClear: true,
                                            placeholder: 'Select'
                                          });
                                        }, 1000);
                                    });
                                },
                            });

                            $("#extrabutton").click(function() {

                                extraObj.startUpload();

                            });

                        });

                    $(document).ready(function() {
                      localStorage.setItem("doc_count_flag", '1');
                    });
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <!-- <button type="button" class="btn-yu btn-width primary text-white" data-dismiss="modal">Save</button> -->
          <button type="button" class="btn-yu btn-width primary text-white" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div id="container-floating">
    <div class="container" style="z-index: 107">
      <div class="row">
        <div id="Smallchat">
          <div class="Layout Layout-open Layout-expand Layout-right" style="background-color: #3F51B5;color: rgb(255, 255, 255);opacity: 5;border-radius: 10px;">
            <div class="Messenger_messenger">
              <div class="Messenger_header" style="background-color: rgb(22, 46, 98); color: rgb(255, 255, 255);">
                <h4 class="Messenger_prompt" style="color:white">How can we help you?</h4> <span class="chat_close_icon"><i class="fa fa-window-close" aria-hidden="true"></i></span>
              </div>
              <div class="Messenger_content">
                <div class="Messages">
                  <div class="Messages_list"></div>
                </div>
                <div class="Input Input-blank">
                  <textarea class="Input_field" placeholder="Type message here..." style="height: 20px;"></textarea>
                  <button class="Input_button Input_button-upload">
                    <div class="Icon " style="width: 18px; height: 18px;margin-top:5px;">
                      <i class="ft-paperclip upload-icon info-1 font-medium-4" style="cursor:pointer;color:#96aab4" title="Upload Attachment" data-original-title="Upload Attachment" data-toggle="modal" data-target="#document_upload_modal"></i>
                    </div>
                  </button>
                  <button class="Input_button Input_button-emoji">
                    <div class="Icon" style="width: 18px; height: 18px;">
                      <svg width="56px" height="56px" viewBox="1332 47 56 56" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 18px; height: 18px;">
                        <g id="emoji" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1332.000000, 47.000000)">
                          <path d="M28,56 C12.536027,56 0,43.463973 0,28 C0,12.536027 12.536027,0 28,0 C43.463973,0 56,12.536027 56,28 C56,43.463973 43.463973,56 28,56 Z M28,50 C40.1502645,50 50,40.1502645 50,28 C50,15.8497355 40.1502645,6 28,6 C15.8497355,6 6,15.8497355 6,28 C6,40.1502645 15.8497355,50 28,50 Z" id="Oval-8" fill="#96AAB4" fill-rule="nonzero"></path>
                          <path d="M28,47 C18.0588745,47 10,38.9411255 10,29 C10,27.5224898 11.5469487,26.5550499 12.8754068,27.2017612 C13.0116063,27.2662365 13.0926181,27.3037345 13.1866998,27.3464814 C13.4611235,27.4711684 13.7819537,27.6111958 14.1451774,27.7627577 C15.1908595,28.199088 16.3591406,28.6365764 17.6173846,29.0449298 C21.1841638,30.2025005 24.7379224,30.8945075 28,30.8945075 C31.2620776,30.8945075 34.8158362,30.2025005 38.3826154,29.0449298 C39.6408594,28.6365764 40.8091405,28.199088 41.8548226,27.7627577 C42.2180463,27.6111958 42.5388765,27.4711684 42.8133002,27.3464814 C42.9073819,27.3037345 42.9883937,27.2662365 43.0558366,27.2344634 C44.4530513,26.5550499 46,27.5224898 46,29 C46,38.9411255 37.9411255,47 28,47 Z M28,43 C34.6510529,43 40.2188483,38.3620234 41.6456177,32.1438387 C40.9980758,32.3847069 40.320642,32.6213409 39.6173846,32.8495777 C35.6841638,34.1260741 31.7379224,34.8945075 28,34.8945075 C24.2620776,34.8945075 20.3158362,34.1260741 16.3826154,32.8495777 C15.679358,32.6213409 15.0019242,32.3847069 14.3543823,32.1438387 C15.7811517,38.3620234 21.3489471,43 28,43 Z" id="Oval-8" fill="#96AAB4" fill-rule="nonzero"></path>
                          <path d="M19,15 L19,20 C19,21.1045695 19.8954305,22 21,22 C22.1045695,22 23,21.1045695 23,20 L23,15 C23,13.8954305 22.1045695,13 21,13 C19.8954305,13 19,13.8954305 19,15 Z" id="Line" fill="#96AAB4" fill-rule="nonzero"></path>
                          <path d="M32,15 L32,20 C32,21.1045695 32.8954305,22 34,22 C35.1045695,22 36,21.1045695 36,20 L36,15 C36,13.8954305 35.1045695,13 34,13 C32.8954305,13 32,13.8954305 32,15 Z" id="Line-Copy-2" fill="#96AAB4" fill-rule="nonzero"></path>
                        </g>
                      </svg>
                    </div>
                  </button>
                  <button class="Input_button Input_button-send">
                    <div class="Icon" style="width: 18px; height: 18px;">
                      <svg width="57px" height="54px" viewBox="1496 193 57 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 18px; height: 18px;">
                        <g id="Group-9-Copy-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1523.000000, 220.000000) rotate(-270.000000) translate(-1523.000000, -220.000000) translate(1499.000000, 193.000000)">
                          <path d="M5.42994667,44.5306122 L16.5955554,44.5306122 L21.049938,20.423658 C21.6518463,17.1661523 26.3121212,17.1441362 26.9447801,20.3958097 L31.6405465,44.5306122 L42.5313185,44.5306122 L23.9806326,7.0871633 L5.42994667,44.5306122 Z M22.0420732,48.0757124 C21.779222,49.4982538 20.5386331,50.5306122 19.0920112,50.5306122 L1.59009899,50.5306122 C-1.20169244,50.5306122 -2.87079654,47.7697069 -1.64625638,45.2980459 L20.8461928,-0.101616237 C22.1967178,-2.8275701 25.7710778,-2.81438868 27.1150723,-0.101616237 L49.6075215,45.2980459 C50.8414042,47.7885641 49.1422456,50.5306122 46.3613062,50.5306122 L29.1679835,50.5306122 C27.7320366,50.5306122 26.4974445,49.5130766 26.2232033,48.1035608 L24.0760553,37.0678766 L22.0420732,48.0757124 Z" id="sendicon" fill="#96AAB4" fill-rule="nonzero"></path>
                        </g>
                      </svg>
                    </div>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!--===============CHAT ON BUTTON STRART===============-->
          <div class="nd3 nds chat_on" data-toggle="tooltip" data-placement="left" data-original-title="Chatbot">
            <span class="chat_on_icon"><i class="fa fa-comments" aria-hidden="true" style="font-size: 78%;margin-left: 20%;"></i></span>
          </div>
          <!--===============CHAT ON BUTTON END===============-->
        </div>
      </div>
    </div>
    <div class="nd1 nds" data-toggle="tooltip" data-placement="left" data-original-title="Upload Documents" onclick="document_upload_modal_toggle()"><img class="reminder">
      <i class=" letter ft-upload"></i>
    </div>

    <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Quick Actions">
      <p class="plus">+</p>
      <img class="edit" src="<?= base_url() ?>app-assets/images/float_button_edit.png">
    </div>
  </div>

  <script type="text/javascript">
    function document_upload_modal_toggle() {
      $('#multiple_upload_modal').modal('show');
    }


  </script>

  <script>
    function hide_img_div(uploader_class) {
      $("." + uploader_class).hide(2000);

      $.confirm({
        title: 'Replace!',
        type: 'orange',
        content: 'Do you want to replace existing file',
        buttons: {
          text: 'Done!',
          btnClass: 'btn-yu',
          update: function() {

            $.alert({
              title: '',
              content: '<div class="container"><div class="row"><div class="col-lg-4 col-md-4"><h4 class="text-center">Total Files</h4></div><div class="col-lg-4 col-md-4"><h4 class="text-success text-center">Uploaded</h4></div><div class="col-lg-4 col-md-4"><h4 class="text-danger text-center">Failed</h4></div></div><div class="row"><div class="col-lg-4 col-md-4"><h4 class="text-center count_fount">10</h4></div><div class="col-lg-4 col-md-4"><h4 class="text-success text-center count_fount">7</h4></div><div class="col-lg-4 col-md-4"><h4 class="text-danger text-center count_fount">3</h4></div></div></div>',
              type: 'green',
              buttons: {
                continue: {
                  text: 'Continue',
                  action: function() {
                    $.alert('File Uploaded Successfully');
                    start_upload();
                  }
                }
              }
            });

          },
          cancel: function() {
            $('#document_upload_modal').modal('show');
          }
        }
      });
    }

    function success_count_modal_show() {
      $('#success_count_modal').modal('show');
    }

    function start_upload() {
      window.location.href = "<?= base_url() ?>document/Document_controller/document_view?upload_confirmation=yes"
    }
  </script>

  <script>
    function handleUpdate(color, color_nav, icon_color, icon_nav, active_color) {
      localStorage.setItem('baseColor', color);
      localStorage.setItem('navColor', color_nav);
      localStorage.setItem('iconColor', icon_color);
      localStorage.setItem('inconColorNav', icon_nav);
      localStorage.setItem('activeColor', active_color);
      location.reload();
    }

    (function() {
      var baseC = localStorage.getItem('baseColor');
      document.documentElement.style.setProperty('--baseColor', baseC);
      var navC = localStorage.getItem('navColor');
      document.documentElement.style.setProperty('--navColor', navC);
      var iconC = localStorage.getItem('iconColor');
      document.documentElement.style.setProperty('--iconColor', iconC);
      var iconC_nav = localStorage.getItem('inconColorNav');
      document.documentElement.style.setProperty('--iconColorNav', iconC_nav);
      var active_Col = localStorage.getItem('activeColor');
      document.documentElement.style.setProperty('--activeColor', active_Col);
    })();
    window.onbeforeunload = function() {
      localStorage.removeItem(key);
      return '';
    };

    function check_frequency_footer() {
      var frequency_selected = $('input[name="frequency_footer"]:checked').val();
      if (frequency_selected == "annually") {
        $("#month_selection_footer").prop("disabled", true);
        $("#month_selection_footer").show();
        $("#half_year_selection_footer").hide();
        $("#quartly_selection_footer").hide();
      } else if (frequency_selected == "monthly") {
        $("#month_selection_footer").show();
        $("#month_selection_footer").prop("disabled", false);
        $("#half_year_selection_footer").hide();
        $("#quartly_selection_footer").hide();
      } else if (frequency_selected == "yearly") {

        $("#month_selection_footer").hide();
        $("#half_year_selection_footer").show();
        $("#quartly_selection_footer").hide();
      } else if (frequency_selected == "quartely") {
        $("#month_selection_footer").hide();
        $("#half_year_selection_footer").hide();
        $("#quartly_selection_footer").show()
      }
    }
  </script>



  <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 ml-2"><span class="float-md-left d-block d-md-inline-block footer-test-size footer-color">Design & Developed by<a class="text-bold-800 grey darken-2" href="https://yashussunlimited.com/" target="_blank"> - Solution Doctors</a></span></p>
  </footer>

  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>app-assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>app-assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>app-assets/js/plugins/popper_js/popper.min.js"></script>
  <script src="<?= base_url() ?>app-assets/js/jquery-ui.js"></script>

  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/plugins/toastr_js/toastr.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/tweenmax.min.js"></script>

  <script type="text/javascript" src="<?= base_url() ?>app-assets/fonts/font-awesome/css/font-awesome.min.css"></script>

  <!-- BEGIN: Theme JS-->
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/core/app-menu.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/core/app.js"></script>
  <!-- END: Theme JS-->
    <!-- BEGIN: Vendor JS-->
  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/vendors.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/charts/chartist.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
  <!-- END: Page Vendor JS-->
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/scripts/datatables/datatables.min.js"></script>

  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/pickers/pickadate/picker.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/tables/jszip.min.js"></script>

  <!-- dashboard js -->
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/dashboard.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app-assets/js/scripts/charts/c3/data/category-data.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app-assets/js/scripts/charts/c3/transform/to-bar.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app-assets/js/scripts/charts/c3/other/timeseries.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app-assets/js/scripts/charts/c3/bar-pie/pie.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app-assets/vendors/js/charts/d3.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app-assets/vendors/js/charts/c3.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app-assets/js/scripts/charts/c3/bar-pie/donut.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app-assets/js/loader.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app-assets/js/scripts/navs/navs.js"></script>
  <script src="<?= base_url() ?>app-assets/js/scripts/charts/c3/data/data-color.js"></script>


  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/jQuery.resizableColumns.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/jQuery.resizableColumns.min.js"></script>

  <script type="text/javascript" src='<?= base_url() ?>app-assets/fonts/font-awesome/js/a076d05399.js'></script>
  <!--DropZone-->
  <script src="<?= base_url() ?>app-assets/js/dropzone.js"></script>


  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/plugins/confirm_js/jquery-confirm.min.js"></script>

  <!-- imp for file upload to work------------------------------------ -->
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/scripts/forms/custom-file-input.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/plugins/custom_file_uploader/jquery.uploadfile.min.js"></script>

  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/colResizable-1.6.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/colResizable-1.6.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/scripts/datatables/dataTables.fixedColumns.min.js"></script>


  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>app-assets/vendors/css/forms/selects/select2.min.css">
  <script src="<?= base_url() ?>app-assets/vendors/js/forms/select/select2.full.min.js"></script>
  <script src="<?= base_url() ?>app-assets/js/scripts/forms/select/form-select2.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/plugins/jquery.multiselect.js"></script>

  <script type="text/javascript" src="<?= base_url() ?>app-assets/vendors/js/repeater/jquery.repeater.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>app-assets/js/form-repeater.js"></script>

  <script src="<?= base_url() ?>app-assets/vendors/js/extensions/datedropper.min.js"></script>
  <script src="<?= base_url() ?>app-assets/vendors/js/extensions/timedropper.min.js"></script>
  <script src="<?= base_url() ?>app-assets/js/scripts/extensions/date-time-dropper.js"></script>
  <script src="<?= base_url() ?>app-assets/vendors/js/extensions/moment.min.js"></script>
  <script src="<?= base_url() ?>app-assets/js/scripts/extensions/fullcalendar.js"></script>
  <script src="<?= base_url() ?>app-assets/vendors/js/extensions/fullcalendar.min.js"></script>
  <script src="<?= base_url() ?>app-assets/vendors/js/extensions/moment.min.js"></script>
  <script src="<?= base_url() ?>app-assets/js/scripts/extensions/fullcalendar.js"></script>


  <!-- Report view graph -->
  <script src="<?= base_url() ?>app-assets/js/scripts/charts/c3/bar-pie/stacked-bar.js"></script>

  <script src="<?= base_url() ?>app-assets/js/scripts/charts/c3/data/data-order.js"></script>
  <script src="<?= base_url() ?>app-assets/js/scripts/charts/c3/data/category-data.js"></script>

  <!-- Selectivity JS -->
  <script src="<?= base_url() ?>app-assets/vendors/js/forms/select/selectivity-full.min.js"></script>
  <script src="<?= base_url() ?>app-assets/js/scripts/forms/select/form-selectivity.js"></script>

  <!-- summernote editor JS-->
  <script src="<?= base_url() ?>app-assets/vendors/js/editors/summernote/summernote.js"></script>
  <script src="<?= base_url() ?>app-assets/js/scripts/editors/editor-summernote.js"></script>

  <!-- ckeditor-->
  <!-- <script src="<?= base_url() ?>app-assets/vendors/js/editors/ckeditor/ckeditor.js"></script>
  <script src="<?= base_url() ?>app-assets/js/scripts/editors/editor-ckeditor.js"></script> -->



  </body>
  <!-- END: Body-->

  </html>
  <script>
    $(document).ready(function() {
      $(".chat_on").click(function() {
        $(".Layout").toggle();
        $(".chat_on").hide(300);
      });

      $(".chat_close_icon").click(function() {
        $(".Layout").hide();
        $(".chat_on").show(300);
      });

    });
    //$('#search-input').hide();
    $('#s-icon').click(function() {
      $('#search-input').toggle();
    });

    function logout_session() {
      $.ajax({
        url: "<?= base_url() ?>authentication/Session_management/remove_session",
        type: "POST",
        dataType: 'JSON',
        data: "key=role",
        success: function(data) {
          window.location.href = "<?= base_url() ?>authentication/Authenticate/login?initial_login=enter";
        }
      });
    }
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".multiple-input").attr("multiple","multiple");
      $('.multiple-input').multiselect({
        columns: 0,
        placeholder: 'Select',
        search: true,
        searchOptions: {
          'default': 'Search'
        },
        selectAll: true
      });

      $(".multiple-input").multiselect('reset');
        
    });
  </script>