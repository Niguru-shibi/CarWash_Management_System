<div class="container-services">
  <div class="section-title">
    <span>Our Benefits</span>
    <h1>Why Choose Auto Shine?</h1>
    <p>We go beyond washing cars. Expertise, care, and technology give your vehicle the shine it deserves.</p>
  </div>

  <div class="services-grid" id="servicesPublicGrid"></div>
</div>

<script>
$(function() {
    function loadPublicServices() {
        $.ajax({
            url: '../controller/services.php?action=getServices',
            type: 'GET',
            dataType: 'json',
            success: function(services) {
                $('#servicesPublicGrid').empty();
                services.forEach(function(s) {
                    let listItems = s.services_list_items.split(',').map(i => `<li>${i.trim()}</li>`).join('');
                    let card = `
                        <div class="service-card">
                            <i class="${s.services_icon}"></i>
                            <h2>${s.services_title}</h2>
                            <p>${s.services_subtitle}</p>
                            <ul>${listItems}</ul>
                        </div>
                    `;
                    $('#servicesPublicGrid').append(card);
                });
            },
            error: function() {
                $('#servicesPublicGrid').html('<p class="text-center text-danger">Failed to load services.</p>');
            }
        });
    }

    loadPublicServices();
    setInterval(loadPublicServices, 10000);
});
</script>


<!-- 🎨 Styles (reuse your previous service-card styles) -->
<style>
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 2.5rem;
    max-width: 1200px;
    margin: 0 auto;
}

.service-card {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 16px;
    padding: 2.5rem 2rem;
    text-align: center;
    transition: all 0.4s ease;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    color: #000;
}

.service-card:hover {
    transform: translateY(-15px) scale(1.03);
    box-shadow: 0 15px 35px rgba(56, 189, 248, 0.4);
}

.service-card i {
    font-size: 3.2rem;
    color: #0ea5e9;
    margin-bottom: 1rem;
    transition: transform 0.4s ease;
}

.service-card:hover i {
    transform: rotate(10deg) scale(1.2);
}

.service-card h2 {
    font-size: 2.2rem;
    margin: 0.5rem 0;
    font-weight: 700;
}

.service-card p {
    font-size: 1.1rem;
    margin-bottom: 1.2rem;
}

.service-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 1rem;
    color: #222;
}

.service-card ul li {
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.service-card ul li::before {
    content: "✔";
    color: #0ea5e9;
    font-weight: bold;
}
</style>
