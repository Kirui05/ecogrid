jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'eco_renewable_energy_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});


// WordClever – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const eco_renewable_energy_button = document.getElementById('install-activate-button');

    if (!eco_renewable_energy_button) return;

    eco_renewable_energy_button.addEventListener('click', function (e) {
        e.preventDefault();

        const eco_renewable_energy_redirectUrl = eco_renewable_energy_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const eco_renewable_energy_checkData = new FormData();
        eco_renewable_energy_checkData.append('action', 'check_wordclever_activation');

        fetch(installWordcleverData.ajaxurl, {
            method: 'POST',
            body: eco_renewable_energy_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = eco_renewable_energy_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                eco_renewable_energy_button.textContent = 'Installing & Activating...';

                const eco_renewable_energy_installData = new FormData();
                eco_renewable_energy_installData.append('action', 'install_and_activate_wordclever_plugin');
                eco_renewable_energy_installData.append('_ajax_nonce', installWordcleverData.nonce);

                fetch(installWordcleverData.ajaxurl, {
                    method: 'POST',
                    body: eco_renewable_energy_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = eco_renewable_energy_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        eco_renewable_energy_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    eco_renewable_energy_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
