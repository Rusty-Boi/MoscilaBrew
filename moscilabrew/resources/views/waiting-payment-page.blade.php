@extends('layouts.master')
@section('title', 'Waiting Payment Page')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'waitingPaymentPageBody')

@section('content')
    <div class="container-fluid">
        <section id="waiting_payment_section ">
            <div class="section-title nav-on">
                <h2>Selesaikan Pembayaran Anda</h2>
            </div>

            <div class="row">

                <div class="col d-flex justify-content-center">
                    <i class="fa-solid fa-clock fa-3x" style="padding-top: 1rem; padding-right: 0.9rem;"></i>
                    <p id="demo" style="font-size: 3rem;"></p>
                </div>
            </div>

            <div class="row d-flex justify-content-center" style="padding-top: 1rem; padding-bottom: 1rem;">
                <div class="col-6" style="width: fit-content; padding-right: 4 rem;">
                    <h3 style="font-size: 1rem; font-weight: 450;">
                        Batas Akhir Pembayaran
                    </h3>
                </div>
                <div class="col-6 px-0" style="width: fit-content;">
                    <h3 style="font-weight: 700; font-size: 1rem;">
                        {{ $transaction->tgl_transaksi ?? '2023-06-21 10:27:23' }}
                    </h3>
                </div>
            </div>

            <div class="container-lg border" style="width: 37rem; background: rgba(239, 195, 164, 0.4);border-radius: 8;">
                <div class="row d-flex">
                    <div class="col-3 border-end border-black px-0" style="margin: 1rem;">
                        <img src="{{ asset('img/bank/mandiri.png') }}"
                            style="width: 9rem; margin-top: 1rem; margin-left: rem;" alt="">
                        <h3 style="font-size: 1rem; font-weight: 450; padding-left: 0.4rem;">
                            Mandiri Debit
                        </h3>
                    </div>
                    <div class="col">
                        <div class="col" style="margin: 1rem;">
                            <h3 style="font-size: 1rem; font-weight: 450; padding-left: 0.4rem; width: fit-content;">
                                Nomor Rekening
                            </h3>
                            <div class="container" style="font-size: 1.2rem; font-weight: 700; padding-left: 0.4rem;">
                                123456789
                                <button class="fa-regular fa-copy border-0"
                                    style="background-color: rgba(239, 195, 164, 0.4);"></button>
                            </div>
                        </div>
                        <div class="col" style="margin: 1rem;">
                            <h3 style="font-size: 1rem; font-weight: 450; padding-left: 0.4rem; width: fit-content;">
                                Nomor Rekening
                            </h3>
                            <div class="container" style="font-size: 1.2rem; font-weight: 700; padding-left: 0.4rem;">
                                Rp {{ number_format($total_harga ?? $transaction->subtotal, 0, ',', '.') }}
                                <button class="fa-regular fa-copy border-0"
                                    style="background-color: rgba(239, 195, 16  4, 0.4);"></button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    </div>

    <div class="container text-center justify-content-center " style="padding-top: 5rem;width: 37rem;">
        <div class="row d-flex justify-content-center">
            <div class="col px-0">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                    style="background-color: rgba(239, 195, 164, 0.4);">
                    Cek Status Pembayaran
                    <i class="fa-solid fa-rotate"></i>
                </button>
            </div>
            <div class="col px-0">
                <a href="{{ route('daftar-transaksi') }}">

                    <button type="button" class="btn" style="background-color: rgba(239, 195, 164, 0.4);">
                        Cek Daftar Transaksi
                        <i class="fa-solid fa-list"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="container text-center justify-content-center " style="padding-top: 5rem;width: 37rem;">
        <div class="container border-radius"
            style="font-size: 1.5rem; font-weight: 700; background-color: rgba(239, 195, 164, 0.4); border-radius: 9;">
            <span>
                Cara Pembayaran
            </span>
        </div>

        <div class="list-group border-0" style="font-size: 0.7rem; font-weight: 450;">
            <li class="list-group-item border-0 text-start">1. Masukkan kartu ATM dan PIN</li>
            <li class="list-group-item border-0 text-start">2. Pilih menu "Bayar/Beli"</li>
            <li class="list-group-item border-0 text-start">3. Pilih menu "Lainnya", hingga menemukan menu
                "Multipayment"</li>
            <li class="list-group-item border-0 text-start">4. Masukkan Kode Moscilabrew (88708), lalu pilih Benar</li>
            <li class="list-group-item border-0 text-start">5. Masukkan Nomor Rekening Pembayaran, lalu pilih tombol
                Benar</li>
            <li class="list-group-item border-0 text-start">6. Masukkan Angka "1" untuk memilih tagihan, lalu pilih
                tombol Ya</li>
            <li class="list-group-item border-0 text-start">7. Akan muncul konfirmasi pembayaran, lalu pilih tombol Ya
            </li>
            <li class="list-group-item border-0 text-start">8. Simpan struk sebagai bukti pembayaran Anda</li>


        </div>
    </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Pembayaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Pembayaran telah dikonfirmasi! Vendor akan mengurus pesanan kamu!
                </div>
                <div class="modal-footer">
                    <a href="{{ route('dashboard') }}"><button type="button" class="btn btn-secondary"
                            style="background-color: rgba(239, 195, 164, 0.4); "><span style="color: black;">Kembali ke
                                halaman utama</span></button></a>
                    <!-- <button type="button" class="btn btn-primary">Kembali ke halaman utama</button> -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css">
@endsection

@section('js')
    <script src={{ asset('js/index.js') }}></script>

    <script>
        function calculateTimeRemaining() {
            const currentDate = new Date();
            const nextDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate() + 1);
            const remainingTime = nextDay - currentDate;

            const hoursRemaining = Math.floor(remainingTime / (60 * 60 * 1000));
            const minutesRemaining = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));
            const secondsRemaining = Math.floor((remainingTime % (60 * 1000)) / 1000);

            const formattedTime = `${padZero(hoursRemaining)}:${padZero(minutesRemaining)}:${padZero(secondsRemaining)}`;
            return formattedTime;
        }

        function padZero(number) {
            return number.toString().padStart(2, '0');
        }

        function main() {
            document.getElementById("demo").innerHTML = calculateTimeRemaining()

            setTimeout(main, 1000);
        }

        // Example usage:
        // const remainingTime = calculateTimeRemaining();
        // document.getElementById("nextday").innerHTML = nextDay

        main()
        
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })

    </script>
    <script src="https://kit.fontawesome.com/0c265f6a3f.js" crossorigin="anonymous"></script>

@endsection
