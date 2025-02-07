<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Denomination Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold text-center mb-4">Bank Denomination Calculator</h2>

        <form action="{{ route('calculate') }}" method="POST" class="mb-4">
            @csrf
            <label class="block mb-2 text-sm font-medium">Enter Deposit Amount:</label>
            <input type="number" name="amount" class="w-full p-2 border rounded" required>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 mt-2 rounded">Calculate</button>
        </form>

        @if(isset($breakdown))
            <h3 class="text-lg font-semibold mt-4">Denomination Breakdown:</h3>
            <table class="w-full border-collapse border border-gray-300 mt-2">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border p-2">Denomination</th>
                        <th class="border p-2">Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($breakdown as $note => $count)
                        <tr>
                            <td class="border p-2">₹{{ $note }}</td>
                            <td class="border p-2">{{ $count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>