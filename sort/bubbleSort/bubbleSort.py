data = [2, 1, 7, 5, 6, 3, 2, 0, 9]


def bubbleSort(data):
    n = len(data)
    # The out layer loop control times from head to end
    for j in range(n-1):
        # use count to record the counts about all exchange
        count = 0
        # the inner layer loop control times
        for i in range(0, n-1-j):
            if data[i] > data[i+1]:
                data[i], data[i+1] = data[i+1], data[i]
                count += 1
        if 0 == count:
            break
    return data


if __name__ == '__main__':
    alist = [5, 4, 26, 93, 7, 7, 44, 3, 1, 44, 55, 2, 0]
    print("source list:%s" % alist)
    bubbleSort(alist)
    print("new list:%s" % alist)
