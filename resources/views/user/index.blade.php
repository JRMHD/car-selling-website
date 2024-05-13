<section style="background-color: #f8f9fa;" class="ftco-section">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div>

            </div>

        </div>
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-6">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <p><strong>Price:</strong> ${{ $post->price }}</p>
                            <a href="#" class="btn btn-primary" onclick="openModal()">Book now</a>
                            <a href="{{ url('/contact') }}" class="btn btn-secondary">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Modal for booking form -->
                <div id="bookingModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <div class="booking-form">
                            <h2>Book Now</h2>
                            <!-- Booking form -->
                            <form>

                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required><br>

                                <label for="phone">Phone:</label>
                                <input type="tel" id="phone" name="phone" required><br>

                                <label for="vehicle_type">Vehicle Type:</label>
                                <input type="text" id="vehicle_type" name="vehicle_type" required><br>

                                <button type="submit" class="btn-primary">Submit</button>
                            </form>

                            <!-- Button for Book with Phone Call -->
                            <a href="tel:+18007749450" class="btn-secondary">Book with Phone Call</a>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-md-12 text-center">
                    <p style="font-size: 18px; color: #555;">No posts available. Contact us for more information
                        at
                        <a href="tel:+18007749450">+1 800 774 9450</a> or
                        <a href="mailto:cgreen@hacksolutionsusa.com">cgreen@hacksolutionsusa.com</a>.
                    </p>
                    <a href="/" class="go-home-btn">Go Home</a>
                </div>
            @endforelse
        </div>
    </div>
</section>
<script>
    // Function to open the modal
    function openModal() {
        document.getElementById('bookingModal').style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('bookingModal').style.display = 'none';
    }
</script>
