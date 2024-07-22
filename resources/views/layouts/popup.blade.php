<div id="popup-background" class="popup-background"
        style="display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                backdrop-filter: blur(5px);
                z-index: 1000;
                justify-content: center;
                align-items: center;">
        <div id="popup" class="popup"
            style="display: flex; justify-content:center;align-items:center;width:100%; z-index:1001;">
            <div class="popup-content" style="width: 40%; position: relative;">
                <button class="closebtn" onclick="hidePopup()" 
                        style="position: absolute; top: 10px; right: 10px; z-index: 1002;"><b>X</b></button>
                <img src="{{ asset('pictures/Admission.png') }}" alt="Admission" style="width: 100%">
            </div>
        </div>
    </div>

    <script>
        function hidePopup() {
            document.getElementById('popup-background').style.display = 'none';
        }

        function showPopup() {
            document.getElementById('popup-background').style.display = 'flex';
        }

        function showPopupOnLoad() {
            var popupBackground = document.getElementById('popup-background');
            if (popupBackground) {
                showPopup();
            }
        }

        // Close popup when clicking on the background
        document.getElementById('popup-background').addEventListener('click', function (event) {
            if (event.target === this) {
                hidePopup();
            }
        });

        // Call showPopupOnLoad when the page finishes loading
        window.addEventListener('load', showPopupOnLoad);
    </script>
