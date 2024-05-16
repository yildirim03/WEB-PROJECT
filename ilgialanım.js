// Kullanıcının dizi adını girdikten sonra "Ara" butonuna tıkladığında gerçekleşecek olan olay dinleyicisi
document.getElementById('searchButton').addEventListener('click', function() {
    // Kullanıcının girdiği dizi adını al
    var seriesName = document.getElementById('seriesName').value;
    if (seriesName === "") { // Kullanıcı boş bir dizi adı girdiyse uyarı ver ve fonksiyondan çık
        alert("Lütfen bir dizi adı girin.");
        return;
    }

    // API'ye gönderilecek URL'yi oluştur
    var apiUrl = 'https://api.tvmaze.com/singlesearch/shows?q=' + encodeURIComponent(seriesName);

    // API'ye GET isteği gönder ve dönen yanıtı işle
    fetch(apiUrl)
        .then(response => {
            // Yanıt başarılı değilse hata fırlat
            if (!response.ok) {
                throw new Error('Dizi bulunamadı.');
            }
            // JSON yanıtını döndür
            return response.json();
        })
        .then(data => {
            // Dönen verileri HTML'e ekleyerek göster
            var seriesInfo = document.getElementById('seriesInfo');
            seriesInfo.innerHTML = `
                <h2>${data.name}</h2>
                <img src="${data.image.medium}" alt="${data.name}" style="width: 300px; height: 200px;">
                <p><strong>Tür:</strong> ${data.genres.join(', ')}</p>
                <p><strong>Puan:</strong> ${data.rating.average}</p>
                <p><strong>Açıklama:</strong> ${data.summary}</p>
            `;
        })
        // Hata yakalama
        .catch(error => {
            // Hata mesajını göster
            var seriesInfo = document.getElementById('seriesInfo');
            seriesInfo.innerHTML = '<p>' + error.message + '</p>';
        });
});
