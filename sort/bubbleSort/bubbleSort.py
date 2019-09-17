data = [2, 1, 7, 5, 6, 3, 2, 0, 9]


def bubbleSort(data):
    for i in range(0, len(data)):
        if data[i] > data[i+1]:
            print(data[i])


bubbleSort(data)
