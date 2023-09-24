
<style>

.transition-transform {
    transition-property: transform;
    transition-duration: 0.3s;
    transition-timing-function: ease-in-out;
}

</style>


<div id="myModal" class="modal hidden fixed w-full h-full top-0 left-0 flex items-center justify-center backdrop-blur-md">
    <div class="modal-content bg-white w-1/2 p-4 rounded-lg transform scale-0 transition-transform">
        <span id="closeModal" class="modal-close cursor-pointer absolute top-0 right-0 p-4">&times;</span>
        <h1 class="text-2xl font-semibold">Ini Modal</h1>
        <p>Isi konten modal di sini.</p>
    </div>
</div>


    <script>


// Ambil elemen-elemen yang diperlukan
const showModalButton = document.getElementById("showModal");
const closeModalButton = document.getElementById("closeModal");
const modal = document.getElementById("myModal");

// Fungsi untuk menampilkan modal
function showModal() {
    modal.classList.remove("hidden");
    modal.querySelector(".modal-content").classList.add("scale-100");
}

// Fungsi untuk menyembunyikan modal
function hideModal() {
    modal.classList.add("hidden");
    modal.querySelector(".modal-content").classList.remove("scale-100");
}


// Event listener untuk tombol tampilkan modal
showModalButton.addEventListener("click", showModal);

// Event listener untuk tombol tutup modal
closeModalButton.addEventListener("click", hideModal);

// Event listener untuk menutup modal ketika mengklik di luar modal
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        hideModal();
    }
});


    </script>