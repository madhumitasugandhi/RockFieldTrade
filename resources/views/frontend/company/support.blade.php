@extends('frontend.layout.main')

@section('main-container')

<style>
    .main-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f7f7f7; /* Optional: background for the whole page */
    }

    .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 400px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    input, textarea {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #333333;
        border-radius: 4px;
        font-size: 16px;
        /*background-color: gainsboro; */
    }

    input:focus, textarea:focus {
        border-color: #333333;
        outline: none;
        /*background-color: gainsboro;*/
    }

    button {
        padding: 10px;
        background-color: #1273eb;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #005bb5;
    }
</style>

<div class="main-container">
    <div class="form-container">
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection
