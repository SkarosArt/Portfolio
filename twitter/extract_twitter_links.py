import re
import os

def main():
    file_path = r'D:\twitter-2025-04-12-a2a56fd753bcad47f3f5f775e3239698423e4c945fae6aaa4080472e501336df\data\like.js'

    if not os.path.exists(file_path):
        print("Le fichier spécifié est introuvable.")
        return

    twitter_links = []

    with open(file_path, 'r', encoding='utf-8') as file:
        lines = file.readlines()

    # Rechercher tous les liens Twitter dans chaque ligne du fichier
    for line in lines:
        line = line.strip()
        match = re.search(r'"expandedUrl"\s*:\s*"([^"]+)"', line)
        if match and "twitter.com" in match.group(1):
            twitter_links.append(match.group(1))

    # Sauvegarder les liens dans un fichier
    output_path = 'liens_twitter.txt'
    with open(output_path, 'w', encoding='utf-8') as output:
        for link in twitter_links:
            output.write(link + '\n')

    print(f"{len(twitter_links)} liens extraits avec succès et enregistrés dans '{output_path}'.")

if __name__ == "__main__":
    main()