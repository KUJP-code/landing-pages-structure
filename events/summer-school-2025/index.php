<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMMER SCHOOL QR Code Parameter Check</title>
</head>
<body>
    <h1>SUMMER SCHOOL QR Code Parameter Check</h1>
    <p>The following UTM parameters are displayed on this page. Please verify if the QR code is configured correctly.</p>
    <div id="utm-info">
        <!-- The UTM parameters will be displayed here -->
    </div>

    <script>
        // Function to get URL parameters
        function getUrlParams() {
            const params = new URLSearchParams(window.location.search);
            let utmParams = {
                source: params.get("utm_source"),
                medium: params.get("utm_medium"),
                campaign: params.get("utm_campaign")
            };
            return utmParams;
        }

        // Function to display UTM values on the page
        function displayUtmParams() {
            const utmParams = getUrlParams();
            const utmInfoDiv = document.getElementById("utm-info");

            if (utmParams.source || utmParams.medium || utmParams.campaign) {
                utmInfoDiv.innerHTML = `
                    <p><strong>utm_source:</strong> ${utmParams.source || "N/A"}</p>
                    <p><strong>utm_medium:</strong> ${utmParams.medium || "N/A"}</p>
                    <p><strong>utm_campaign:</strong> ${utmParams.campaign || "N/A"}</p>
                `;
            } else {
                utmInfoDiv.innerHTML = "<p>No UTM parameters found in the URL.</p>";
            }
        }

        // Execute the display function when the page loads
        window.onload = displayUtmParams;
    </script>
</body>
</html>